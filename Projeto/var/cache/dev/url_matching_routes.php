<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/empresa' => [[['_route' => 'app_cadastra_empresa', '_controller' => 'App\\Controller\\CadastraEmpresaController::index'], null, null, null, false, false, null]],
        '/empresa/adicionar' => [[['_route' => 'empresa_adicionar', '_controller' => 'App\\Controller\\CadastraEmpresaController::adicionar'], null, null, null, false, false, null]],
        '/socio' => [[['_route' => 'app_cadastro_socio', '_controller' => 'App\\Controller\\CadastroSocioController::index'], null, null, null, false, false, null]],
        '/socio/adicionar' => [[['_route' => 'socio_adicionar', '_controller' => 'App\\Controller\\CadastroSocioController::adicionar'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_ver_empresa_socios', '_controller' => 'App\\Controller\\VerEmpresaSociosController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'GET'], null, null, null, false, false, null]],
        '/api/pdf' => [[['_route' => 'api_pdf', '_controller' => 'App\\Controller\\ApiGeradorPDFController::generatePdf'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/empresa/e(?'
                    .'|ditar/([^/]++)(*:229)'
                    .'|xcluir/([^/]++)(*:252)'
                .')'
                .'|/socio/e(?'
                    .'|ditar/([^/]++)(*:286)'
                    .'|xcluir/([^/]++)(*:309)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        229 => [[['_route' => 'empresa_editar', '_controller' => 'App\\Controller\\CadastraEmpresaController::editar'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'empresa_excluir', '_controller' => 'App\\Controller\\CadastraEmpresaController::excluir'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'socio_editar', '_controller' => 'App\\Controller\\CadastroSocioController::editar'], ['id'], null, null, false, true, null]],
        309 => [
            [['_route' => 'socio_excluir', '_controller' => 'App\\Controller\\CadastroSocioController::excluir'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
