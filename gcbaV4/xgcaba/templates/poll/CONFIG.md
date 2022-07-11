# Configuración de encuestas

_**Este archivo se debe eliminar una vez que se configuren las encuestas.**_

## Permisos para USUARIOS ANÓNIMOS

### Configuración de permisos para que los usuarios anonimos puedan votar:

```sql
INSERT INTO
    roles_permission
SET
    rid = 1, -- 1 => rol de usuario anónimo
    permission = 'vote on polls',
    module = 'poll';
```

### Configuración de permisos para que los usuarios puedan ver los resultados parciales de la votación:

```sql
INSERT INTO
    roles_permission
SET
    rid = 1, -- 1 => rol de usuario anónimo
    permission = 'inspect all votes',
    module = 'poll';
```

----

###### _Plataforma Digital - Ministerio de Modernización, Innovación y Tecnología_