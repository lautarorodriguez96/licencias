function MediaViewer(){
  this.div;
  this.back;
  this.thumbs=[];
  this.media=[];
  this.pics=[];
  this.active=false;
  this.active_spot;
  this.deactive_spot=0;
  this.media_spot;
  this.content_spot;
  this.video;
}
MediaViewer.prototype.setDiv=function(div){
  this.div=jQuery(div);
};
MediaViewer.prototype.setMediaSpot=function(div){
  this.media_spot=jQuery(div);
};
MediaViewer.prototype.setActiveSpot=function(div){
  this.active_spot=jQuery(div);
};
MediaViewer.prototype.setVideo=function(div){
  this.video=jQuery(div);
};
MediaViewer.prototype.setBack=function(back){
  var cp=this;
  cp.back=jQuery(back);
  cp.back.click(function(e){
    e.preventDefault();
    cp.deactivate();
  });
};
MediaViewer.prototype.setThumbs=function(thumbs){
  var cp=this;
  
  jQuery(thumbs).each(function(i){      
    cp.thumbs.push(this);
    jQuery(this).click(function(e){
      cp.activate();
      cp.show(cp.thumbs.indexOf(this));
    });
  });
  var even=cp.thumbs.length%2==0?'even':'odd';
  jQuery(cp.thumbs[0]).parent().parent().append('<div id="back" class="field-item '+even+'"></div>');
  cp.setBack("#back");
};
MediaViewer.prototype.setMedia=function(media){
  var cp=this;
  jQuery(media).each(function(i){
    cp.media.push(this);
  });
};
MediaViewer.prototype.activate=function(){
  var cp=this;
  if(!cp.active){
    cp.active=true;
    cp.scrollMain();
    if(cp.video){
      cp.video.hide();
    }
  }
};
MediaViewer.prototype.deactivate=function(){
  var cp=this
  if(cp.active){
    cp.active=false;
    cp.scrollMain();
    cp.media_spot.parent().parent().parent().parent().animate({height:1},'medium');
    jQuery('.body-noticia, .body-pagina, .body-libro, .aplicacion-video').slideDown('fast');
    if(cp.video){
      cp.video.show();
    }
  }
};
MediaViewer.prototype.scrollMain=function(){
  var t;
  var cp=this;
  if(cp.active){
    t=this.active_spot;
    cp.back.addClass('active');
  }else{
    t=this.deactive_spot;
    cp.back.removeClass('active');
  }
};
MediaViewer.prototype.show=function(i){
  var cp=this;
  var h=cp.media[i].height;
  var w=cp.media[i].width;
  jQuery.each(cp.media,function(j){
    if(i==j){
     jQuery(this).parent().fadeIn('fast');
    }else{
      jQuery(this).parent().hide();
    }
  });
  jQuery('.body-noticia, .body-pagina, .body-libro, .aplicacion-video').slideUp('fast');
  cp.media_spot.parent().parent().parent().parent().animate({height:h},'medium');
};
MediaViewer.prototype.subscribeVideo=function(i){
  
};
jQuery(function($){
  if(jQuery('.content-noticia').length>0){
    var viewer_noticia=new MediaViewer();
    viewer_noticia.setDiv('.content-noticia');
    viewer_noticia.setThumbs('#thumbs img');
    viewer_noticia.setVideo('#video');
    viewer_noticia.setActiveSpot('.content-noticia #images');
    viewer_noticia.setMediaSpot('.content-noticia #images');
    viewer_noticia.setMedia('.content-noticia #images img');
  }
  if(jQuery('.content-pagina').length>0){
    var viewer_pagina=new MediaViewer();
    viewer_pagina.setDiv('.content-pagina');
    viewer_pagina.setThumbs('#thumbs img');
    viewer_pagina.setVideo('#video');
    viewer_pagina.setActiveSpot('.content-pagina #images');
    viewer_pagina.setMediaSpot('.content-pagina #images');
    viewer_pagina.setMedia('.content-pagina #images img');
  }
  if(jQuery('.content-aplicacion').length>0){
    var viewer_aplicacion=new MediaViewer();
    viewer_aplicacion.setDiv('.content-aplicacion');
    viewer_aplicacion.setThumbs('#thumbs img');
    viewer_aplicacion.setVideo('#video');
    viewer_aplicacion.setActiveSpot('.content-aplicacion #images');
    viewer_aplicacion.setMediaSpot('.content-aplicacion #images');
    viewer_aplicacion.setMedia('.content-aplicacion #images img');
  }  
});