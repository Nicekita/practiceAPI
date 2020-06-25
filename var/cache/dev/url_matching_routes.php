<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'select', 'header' => 'Access-Control-Allow-Origin: http://frontend', 'connectionstring' => 'host=localhost port=5432 dbname=AMWbase user=postgres password=135713', '_controller' => 'App\\Controller\\Sql::select'], null, null, null, false, false, null]],
        '/div' => [[['_route' => 'div', 'header' => 'Access-Control-Allow-Origin: http://frontend', 'connectionstring' => 'host=localhost port=5432 dbname=AMWbase user=postgres password=135713', '_controller' => 'App\\Controller\\DivList::select'], null, null, null, false, false, null]],
        '/save' => [[['_route' => 'save', 'year' => '2020', 'semestr' => '2', 'header' => 'Access-Control-Allow-Origin: http://frontend', 'connectionstring' => 'host=localhost port=5432 dbname=AMWbase user=postgres password=135713', '_controller' => 'App\\Controller\\Save::sql'], null, null, null, false, false, null]],
        '/edit' => [[['_route' => 'edit', 'year' => '2020', 'semestr' => '2', 'header' => 'Access-Control-Allow-Origin: http://frontend', 'connectionstring' => 'host=localhost port=5432 dbname=AMWbase user=postgres password=135713', '_controller' => 'App\\Controller\\Edit::sql'], null, null, null, false, false, null]],
        '/delete' => [[['_route' => 'delete', 'header' => 'Access-Control-Allow-Origin: http://frontend', 'connectionstring' => 'host=localhost port=5432 dbname=AMWbase user=postgres password=135713', '_controller' => 'App\\Controller\\Delete::sql'], null, null, null, false, false, null]],
        '/adddiv' => [[['_route' => 'adddiv', 'header' => 'Access-Control-Allow-Origin: http://frontend', 'connectionstring' => 'host=localhost port=5432 dbname=AMWbase user=postgres password=135713', '_controller' => 'App\\Controller\\AddDiv::sql'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
