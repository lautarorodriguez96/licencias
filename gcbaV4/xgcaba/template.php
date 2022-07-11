<?php
function xgcaba_menu_link(&$variables) {

	global $base_url;
	$element = $variables['element'];
	$sub_menu = '';
	if ($variables['element']['#theme'] == 'menu_link__main_menu') {

		if ($element['#below']) {

	    //Completo el menú con los links grises
			$contenido_menu = '';

			$output = '
			<a href="' . $element['#href'] . '" class="dropdown-toggle" data-toggle="dropdown">' . $element['#title'] . '
				<div class="underline hidden-xs"></div>
			</a>';

			foreach ($element['#below'] as $item) {
				if (!empty($item['#href']) && $item['#href'] != '<') {
					$contenido_menu .= '<li><a title="' . $item['#localized_options']['attributes']['title'] . '" href="' . url($item['#href']) . '">' . $item['#title'] . '</a></li>';
				}
			}

			$sub_menu = '
			<ul class="dropdown-menu main-menu">
				' . $contenido_menu . '
			</ul>';

			return '<li' . drupal_attributes($element['#attributes']) . ' class="dropdown">' . $output . $sub_menu . "</li>\n";
		}
		else {
			$output = l($element['#title'], $element['#href'], $element['#localized_options']);
			return '<li' . drupal_attributes($element['#attributes']) . ' class="dropdown">' . $output . $sub_menu . "</li>\n";
		}

	}
	else {

		if ($element['#below']) {
			$sub_menu = drupal_render($element['#below']);
		}
		$output = l($element['#title'], $element['#href'], $element['#localized_options']);
		return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
	}
}

function xgcaba_menu_tree(&$variables) {
	return '<ul>' . $variables['tree'] . '</ul>';
}

/**
 * Override del primer menu (accesibilidad) para mostrar en el header
 */

function xgcaba_menu_tree__primary(&$variables) {
	return '<ul class="nav navbar-nav navbar-accesible navbar-right primary">' . $variables['tree'] . '</ul>';
}

/**
 * Override del segundo menu (principal) para mostrar en el header
 */
function xgcaba_menu_tree__secondary(&$variables) {
	return '<ul class="nav navbar-nav navbar-right navbar-buenosaires secondary">' . $variables['tree'] . '</ul>';
}

function xgcaba_getGroupAudience($node, &$active_trail) {
	$audience_types = array('book', 'noticia', 'pagina', 'area', 'agrupador');

	if ($node && in_array($node->type, $audience_types)) {
		//si es un nodo y es del tipo q va en el bread => agrego el item al breadcrum
		$insert = array(
			'title' => $node->title,
			'href' => 'node/' . $node->nid,
			'link_path' => 'node/' . $node->nid,
			'localized_options' => array(),
			'type' => 0
		);
		$temp = array($insert);

		//lo inserto al item
		array_splice($active_trail, 1, 0, $temp);
		if (isset($node->group_audience["und"][0]["gid"])) {
			//si el nodo q inserte tiene a su vez un grouop audience => levanto el nodo
			$og = og_get_group('group', $node->group_audience["und"][0]["gid"]);
			$gid = $og->etid;
			$node = node_load($gid);
			return xgcaba_getGroupAudience($node, $active_trail);
		}
		return;
	}
	return;
}

function xgcaba_responsive_css_alter(&$css) {
	unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
	unset($css[drupal_get_path('module', 'system') . '/system.base.css']);
	unset($css[drupal_get_path('module', 'comment') . '/comment.css']);
	unset($css[drupal_get_path('module', 'field') . '/theme/field.css']);
	unset($css[drupal_get_path('module', 'mollom') . '/mollom.css']);
	unset($css[drupal_get_path('module', 'node') . '/node.css']);
	unset($css[drupal_get_path('module', 'search') . '/search.css']);
	unset($css[drupal_get_path('module', 'user') . '/user.css']);
	unset($css[drupal_get_path('module', 'views') . '/css/views.css']);
	unset($css[drupal_get_path('module', 'ctools') . '/css/ctools.css']);
	unset($css[drupal_get_path('module', 'panels') . '/css/panels.css']);
}

function xgcaba_responsive_menu_tree__menu_mi_cuenta($variables) {
	$html = '<button type="button" class="navbar-toggle top-main-nav pull-left" data-toggle="collapse" data-target="#main-nav-cuenta">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</button>
<div class="navbar-collapse collapse" id="main-nav-cuenta">
	<nav role="navigation">
		<ul class="list-group list-unstyled">
			' . $variables['tree'] . '
		</ul>
	</nav>
</div>';
	return $html;
}

function xgcaba_breadcrumb($variables) {
  //$breadcrumb = $variables['breadcrumb']; //Usar este breadcrumb de las variables causaba problemas de orden
	$breadcrumb = drupal_get_breadcrumb();
	if (!empty($breadcrumb)) {

		foreach ($breadcrumb as $key => $miga) {
			if ($miga == '<a href="/">Inicio</a>') {
				$eliminar = $key;
			}
		}

		if (isset($eliminar)) {
			unset($breadcrumb[$eliminar]);
		}

		$breadcrumb = array_unique($breadcrumb);

		if (arg(0) == 'node' && is_numeric(arg(1))) {
			$nodeid = arg(1);
			$node = node_load($nodeid);
			if ($node->type == 'tramites') {
				$breadcrumb[] = '<a href=http://www.buenosaires.gob.ar/tramites>Trámites</a>';
			}
	    //A veces agrega el título otras no de manera que compruebo si ya lo hizo
			if (end($breadcrumb) != $node->title) {
				$breadcrumb[] = '<a href="#">' . $node->title . '</a>';
			}
		}

		$output = '<div class="breadcrumb">' . implode('', $breadcrumb) . '</div>';

		return $output;
	}
}

function xgcaba_menu_breadcrumb_alter(&$active_trail, $item) {

  //Si es libro devuelvo el comportamiento de Drupal que te agrega los hijos al breadcrumb correctamente
	if (isset($active_trail[1]['module']) && $active_trail[1]['module'] == 'book' && !empty($active_trail[2])) {
		$libro = $active_trail;
	}
	$active_trail = array();
	$active_trail[0] = array(
		'title' => 'Buenos Aires',
		'href' => '<front>',
		'localized_options' => array(),
		'type' => 0
	);
	$active_trail = (!empty($libro) ? array_merge($active_trail, $libro) : $active_trail);

	if (isset($item["page_arguments"][0]->group_audience["und"][0]["gid"])) {
		$grupos = $item["page_arguments"][0]->group_audience["und"];
		unset($active_trail[1]);
		$gid = $item["page_arguments"][0]->group_audience["und"][0]["gid"];
		$og = og_get_group('group', $item["page_arguments"][0]->group_audience["und"][0]["gid"]);
		if ($og) {
			$node = node_load($og->etid);
			if ($node) {
				xgcaba_getGroupAudience($node, $active_trail);
			}
		}

	}
	elseif (isset($item["page_arguments"][0]->type) && $item["page_arguments"][0]->type == 'photoset') {
		$insert = array(
			'title' => 'Albumes',
			'href' => 'foto',
			'link_path' => 'foto',
			'localized_options' => array(),
			'type' => 0
		);
		$temp = array($insert);
		array_splice($active_trail, 1, 0, $temp);
	}
	elseif (isset($item["page_arguments"][0]->type) && $item["page_arguments"][0]->type == 'beneficio') {
		global $base_url;

	  //rubro
		if (!empty($item["page_arguments"][0]->field_rubro["und"][0]["tid"])) {
			$rubro = taxonomy_term_load($item["page_arguments"][0]->field_rubro["und"][0]["tid"]);
			$insert = array(
				'title' => $rubro->name,
				'href' => $base_url . "/beneficios/buscar?f[0]=im_field_rubro:" . $item["page_arguments"][0]->field_rubro["und"][0]["tid"],
				'link_path' => 'foto',
				'localized_options' => array(),
				'type' => 0
			);
			$temp = array($insert);
			array_splice($active_trail, 1, 0, $temp);
		}
	  //subrubro
		if (!empty($item["page_arguments"][0]->field_subrubro["und"][0]["tid"])) {
			$subrubro = taxonomy_term_load($item["page_arguments"][0]->field_subrubro["und"][0]["tid"]);
			$rubro = taxonomy_term_load($item["page_arguments"][0]->field_rubro["und"][0]["tid"]);
			$insert = array(
				'title' => $subrubro->name,
				'href' => $base_url . "/beneficios/buscar?f[0]=im_field_rubro:" . $rubro->tid . "&f[1]=im_field_subrubro:" . $subrubro->tid,
				'link_path' => 'foto',
				'localized_options' => array(),
				'type' => 0
			);
			$temp = array($insert);
			array_splice($active_trail, 2, 0, $temp);
		}
	  //inicio
		$insert = array(
			'title' => "Red en todo estás vos",
			'href' => $base_url . "/redentodoestasvos",
			'link_path' => 'foto',
			'localized_options' => array(),
			'type' => 0
		);
		$temp = array($insert);
		array_splice($active_trail, 1, 0, $temp);
		$active_trail[0]["href"] = "beneficios";
	}
	elseif (isset($item["page_arguments"][0]) && ($item["page_arguments"][0] == 'tarjeta_unica_beneficios_home' || $item["page_arguments"][0] == 'page-tarjeta_unica_beneficios_home')) {
		global $base_url;
		$insert = array(
			'title' => "Red en todo estás vos",
			'href' => $base_url . "/redentodoestasvos",
			'link_path' => 'foto',
			'localized_options' => array(),
			'type' => 0
		);
		$temp = array($insert);
		array_splice($active_trail, 1, 0, $temp);
	}

}


function xgcaba_preprocess_page(&$vars) {

	// COMMENT: En caso de que exista el módulo gcaba_instant_articles carga el metatag de facebook en el header con el id que se configuró.
	if (module_exists('gcaba_instant_articles')) {
		$metatag = array(
			'#tag' => 'meta',
			'#attributes' => array(
				'property' => 'fb:pages',
				'content' => variable_get('gcaba_instant_articles_id')
			)
		);

		drupal_add_html_head($metatag, 'facebook_id_metatag');
	}
	
	$regex = "/tramites/";
	$current_url = check_plain(request_uri());

	if (preg_match($regex, $current_url)) {
		$vars['page']['second_header'] = menu_tree_output(menu_tree_page_data('menu-tramites', 3));
	}
  // Removing breadcrumbs from result page, useless
	$regex = "/bweb/";
	$current_url = check_plain(request_uri());
	if (preg_match($regex, $current_url)) {
		$vars['breadcrumb'] = '';
	}

	$regex = "tarjeta/registro/iframe";
	$current_url = check_plain(request_uri());
	if (stripos($current_url, "tarjeta/registro/iframe") !== false) {
		$vars['breadcrumb'] = '';
	}


	// ---------- BLOQUE PARA PODER SOBRECARGAR PAGINAS POR TIPO DE CONTENIDO ------------- //
//    if (isset($vars['node']->type)) { $vars['theme_hook_suggestions'][] = 'page__' . $vars['node']->type; }
	// ------------------------------------------------------------------------------------ //

}

function strtolower_es($string) {
	$low = array("Á" => "á", "É" => "é", "Í" => "í", "Ó" => "ó", "Ú" => "ú", "Ü" => "ü", "Ñ" => "ñ");
	return strtolower(strtr($string, $low));
}

function strtoupper_es($string) {
	$up = array("á" => "Á", "é" => "É", "í" => "Í", "ó" => "Ó", "ú" => "Ú", "ü" => "Ü", "ñ" => "Ñ");
	return strtoupper(strtr($string, $up));
}

function poll_css_alter(&$css) {
  // Remove defaults.css file.
	if (isset($css[drupal_get_path('module', 'poll') . '/poll.css'])) {
		unset($css[drupal_get_path('module', 'poll') . '/poll.css']);
	}
}

function poll_block_view_poll_recent_alter(&$data, $block) {
	$pid = $data['content']['poll_view_voting']['#node']->vid;
	if (isset($data['content']['links'])) {
		unset($data['content']['links']);
	}
	if (!isset($data['content']['poll_view_results'])) {
		$data['content']['poll_view_voting']['links'] = array(
			'#markup' => l(
				t('Resultado'),
				'node/' . $pid . '/result',
				array('attributes' => array('class' => array('result-link')))
			)
		);
	}
}


// theme custom hooks
function xgcaba_theme($existing, $type, $theme, $path) {
	$items = array();

	$items['user_login'] = array(
		'render element' => 'form',
		'path' => drupal_get_path('theme', 'xgcaba') . '/templates',
		'template' => 'user-login',
		'preprocess functions' => array(
			'xgcaba_preprocess_user_login'
		)
	);

	$items['bootstrap_pager'] = array(
		'variables' => array(
			'items' => null
		),
		'template' => 'bootstrap-pager',
		'path' => $path . '/views/pager'
	);

	$items['beneficios_mlt'] = array(
		'variables' => array(
			'items' => null
		),
		'template' => 'beneficio-more-like-this',
		'path' => $path . '/search'
	);

	return $items;
}

function xgcaba_preprocess_user_login(&$vars) {
	$vars['form']['actions']['submit']['#attributes']['class'][] = 'btn-lg';
}

// Pager styling stuff
function xgcaba_views_mini_pager($variables) {
	$tags = $variables['tags'];
	$element = $variables['element'];
	$parameters = $variables['parameters'];
	$quantity = $variables['quantity'];
	global $pager_page_array, $pager_total;

	$pager_middle = ceil($quantity / 2);
	$pager_current = $pager_page_array[$element] + 1;
	$pager_first = $pager_current - $pager_middle + 1;
	$pager_last = $pager_current + $quantity - $pager_middle;
	$pager_max = $pager_total[$element];
	$i = $pager_first;
	if ($pager_last > $pager_max) {
		$i = $i + ($pager_max - $pager_last);
		$pager_last = $pager_max;
	}
	if ($i <= 0) {
		$pager_last = $pager_last + (1 - $i);
		$i = 1;
	}
	$li_previous = theme(
		'pager_previous',
		array(
			'text' => '',
			'element' => $element,
			'interval' => 1,
			'parameters' => $parameters,
			//'class' => array('glyphicon glyphicon-chevron-left')
		)
	);
	$li_next = theme(
		'pager_next',
		array(
			'text' => '',
			'element' => $element,
			'interval' => 1,
			'parameters' => $parameters
		)
	);

	if ($pager_total[$element] > 1) {
		if ($li_previous) {
			$items[] = array(
				'data' => $li_previous,
				'class' => array('pager-previous'),
			);
		}
		else {
			$options = array('attributes' => array('class' => array('glyphicon glyphicon-chevron-left')));
			$items[] = array(
				'data' => l('', '#', $options),
				'class' => array('disabled', 'progress-disabled'),
			);
		}
		if ($i != $pager_max) {
			for (; $i <= $pager_last && $i <= $pager_max; $i++) {
				if ($i < $pager_current) {
					$items[] = array(
						'class' => array('pager-item'),
						'data' => theme(
							'pager_previous',
							array(
								'text' => $i,
								'element' => $element,
								'interval' => ($pager_current - $i),
								'parameters' => $parameters,
								'attributes' => array('class' => array('glyphicon glyphicon-chevron-left'))
							)
						),
					);
				}
				if ($i == $pager_current) {
					$items[] = array(
						'class' => array('active', 'progress-disabled'),
						'data' => l($i, '#')
					);
				}
				if ($i > $pager_current) {
					$items[] = array(
						'class' => array('pager-item'),
						'data' => theme(
							'pager_next',
							array(
								'text' => $i,
								'element' => $element,
								'interval' => ($i - $pager_current),
								'parameters' => $parameters
							)
						),
					);
				}
			}
		}

		if ($li_next) {
			$items[] = array(
				'class' => array('pager-next'),
				'data' => $li_next,
			);
		}
		else {
			$items[] = array(
				'data' => l('>>'),
				'class' => array('disabled', 'progress-disabled'),
			);
		}
		$title = '<h2 class="element-invisible">' . t('Pages') . '</h2>';
		$html = theme(
			'bootstrap_pager',
			array('items' => $items)
		);
		return $title . $html;
	}
}

// Uso la misma función que use para el mini_pager de views y estandarizo el pager para el theme entero
function xgcaba_pager($variables) {
	return xgcaba_views_mini_pager($variables);
}

/* Solr More Like this tuning */

function xgcaba_apachesolr_search_mlt_recommendation_block($vars) {
  // Quedo 1/2 hack, tengo que agregar codigo para identificar si el bundle
  // es un beneficio y solo en ese caso renderizar con beneficios_mlt
	$docs = $vars['docs'];
	$html = theme(
		'beneficios_mlt',
		array('items' => array_slice($docs, 0, 6))
	);
	return $html;
}

function xgcaba_preprocess_panels_pane(&$vars) {
  // get the subtype
	$subtype = $vars['pane']->subtype;

  // Add the subtype to the panel theme suggestions list
	if (substr($subtype, 0, 16) == "entityform_block") {
		$vars['theme_hook_suggestions'][] = 'panels_pane__entityforms';
	}
	else {
		$vars['theme_hook_suggestions'][] = 'panels_pane__' . $subtype;
	}
	return $vars;
}

function xgcaba_html_head_alter(&$head_elements) {
  //SI ES UN NODO
	if (arg(0) == 'node' && is_numeric(arg(1))) {
		$nodeid = arg(1);
		$node = node_load($nodeid);

		if ($node->type = 'area') {
			$node = (array)$node;
			if (!empty($node['field_imagen_destacada']['und'][0]['uri'])) {
				$url_img = file_create_url($node['field_imagen_destacada']['und'][0]['uri']);
				if ($node['title'] == "Canal de la Ciudad") {
					$head_elements['metatag_google'] = array(
						'#theme' => 'metatag',
						'#type' => 'html_tag',
						'#tag' => 'meta',
						'#id' => 'metatag_google',
						'#attributes' => array('name' => 'google-site-verification', 'content' => 'HlwZJWXdAnF7GgVaFPdbcDsJsXQcyulYR424WGFNYcM'),
					);
				}
			}
		}
	}

  // SI SE TRATA DE UNA VIEW
	if (function_exists('views_get_page_view') && views_get_page_view()) {
		$view = views_get_page_view();

		if (!empty($view)) {
			$url_img = file_create_url($view->result[0]->_field_data['nid']['entity']->field_image['es'][0]['uri']);
			$head_elements['metatag_og:image'] = array(
				'#theme' => 'metatag_opengraph',
				'#type' => 'html_tag',
				'#tag' => 'meta',
				'#id' => 'metatag_og:image',
				'#name' => 'og:image',
				'#attributes' => array('property' => 'og:image', 'content' => $url_img),
			);
			$head_elements['metatag_og:description'] = array(
				'#theme' => 'metatag_opengraph',
				'#type' => 'html_tag',
				'#tag' => 'meta',
				'#id' => 'metatag_og:description',
				'#name' => 'og:description',
				'#attributes' => array('property' => 'og:description', 'content' => 'Últimas noticias Buenos Aires Ciudad - Gobierno de la Ciudad Autónoma de Buenos Aires'),
			);
		}
	}

  //CORRIGE MULTIPLES IMAGENES QUE PONE EL MODULO METATAG OG:IMAGE
	if (!empty($head_elements['metatag_og:image'])) {
		$singleimage = explode(',', $head_elements['metatag_og:image']['#value']);
		$head_elements['metatag_og:image'] = array(
			'#theme' => 'metatag_opengraph',
			'#type' => 'html_tag',
			'#tag' => 'meta',
			'#id' => 'metatag_og:image',
			'#name' => 'og:image',
			'#value' => $singleimage[0],
		);
	}

  //CORRIGE MULTIPLES IMAGENES QUE PONE EL MODULO METATAG TWITTER:IMAGE
	if (!empty($head_elements['metatag_twitter:image'])) {
		$singleimage = explode(',', $head_elements['metatag_twitter:image']['#value']);
		$head_elements['metatag_twitter:image'] = array(
			'#theme' => 'metatag_twitter_cards',
			'#type' => 'html_tag',
			'#tag' => 'link',
			'#id' => 'metatag_twitter:image',
			'#name' => 'twitter:image',
			'#value' => $singleimage[0],
		);
	}
}

function xgcaba_module_exists($module){
    $list = module_list();
    return isset($list[$module]);
}

/**
 *  Hook para permitir el correcto orden del levantado de los tpl para los field collection.
 *  Fuente: https://www.drupal.org/project/field_collection/issues/1137024
 *  Respuesta #37
 */
//function xgcaba_preprocess_field(&$variables, $hook) {
//    if ($variables['element']['#entity_type'] == 'field_collection_item') {
//        // Check if the bundle name (i.e. the field collection field name) is
//        // among the theme hook suggestions.
//        $index = array_search('field__' . $variables['element']['#bundle'],
//            $variables['theme_hook_suggestions']);
//
//        // Remove the bundle theme hook suggestion.
//        if ($index !== false) {
//            unset($variables['theme_hook_suggestions'][$index]);
//        }
//    }
//}