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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'adminPanel', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/event/create' => [[['_route' => 'createEvent', '_controller' => 'App\\Controller\\AdminController::createEvent'], null, null, null, false, false, null]],
        '/admin/events' => [[['_route' => 'Adminevents', '_controller' => 'App\\Controller\\AdminController::showEvents'], null, null, null, false, false, null]],
        '/admin/OS/create' => [[['_route' => 'createOS', '_controller' => 'App\\Controller\\AdminController::CreateOffreStage'], null, null, null, false, false, null]],
        '/admin/OffresStage' => [[['_route' => 'AdminOffreStage', '_controller' => 'App\\Controller\\AdminController::showOffresStage'], null, null, null, false, false, null]],
        '/admin/annales' => [[['_route' => 'AdminAnnals', '_controller' => 'App\\Controller\\AdminController::showAnnales'], null, null, null, false, false, null]],
        '/admin/tutorat/create' => [[['_route' => 'createTutorat', '_controller' => 'App\\Controller\\AdminController::CreateTutorat'], null, null, null, false, false, null]],
        '/admin/tutorats' => [[['_route' => 'AdminTutorats', '_controller' => 'App\\Controller\\AdminController::showTutorats'], null, null, null, false, false, null]],
        '/blogs' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/events' => [[['_route' => 'events', '_controller' => 'App\\Controller\\MMAsiteController::showEvents'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MMAsiteController::Home'], null, null, null, false, false, null]],
        '/offresStage' => [[['_route' => 'OffresStage', '_controller' => 'App\\Controller\\MMAsiteController::lesOffreStage'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|Show(?'
                        .'|Event/([^/]++)(*:200)'
                        .'|OS/([^/]++)(*:219)'
                        .'|Tutorat/([^/]++)(*:243)'
                    .')'
                    .'|delete(?'
                        .'|Event/([^/]++)(*:275)'
                        .'|Offre/([^/]++)(*:297)'
                        .'|Tutorat/([^/]++)(*:321)'
                    .')'
                    .'|annale/(?'
                        .'|([^/]++)(*:348)'
                        .'|delete/([^/]++)(*:371)'
                    .')'
                .')'
                .'|/e(?'
                    .'|vent/([^/]++)(*:399)'
                    .'|dt/([^/]++)(*:418)'
                .')'
                .'|/offresStage/([^/]++)(*:448)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'ShowEvent', '_controller' => 'App\\Controller\\AdminController::createEvent'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'ShowOS', '_controller' => 'App\\Controller\\AdminController::CreateOffreStage'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'ShowTutorat', '_controller' => 'App\\Controller\\AdminController::CreateTutorat'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'deleteEvent', '_controller' => 'App\\Controller\\AdminController::DeleteEvent'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'deleteOffre', '_controller' => 'App\\Controller\\AdminController::DeleteOffre'], ['id'], null, null, false, true, null]],
        321 => [[['_route' => 'deleteTutorat', '_controller' => 'App\\Controller\\AdminController::DeleteTutorat'], ['id'], null, null, false, true, null]],
        348 => [[['_route' => 'ShowAnnale', '_controller' => 'App\\Controller\\AdminController::showAnnale'], ['id'], null, null, false, true, null]],
        371 => [[['_route' => 'deleteAnnale', '_controller' => 'App\\Controller\\AdminController::DeleteAnnale'], ['id'], null, null, false, true, null]],
        399 => [[['_route' => 'voirevent', '_controller' => 'App\\Controller\\MMAsiteController::showEvent'], ['id'], null, null, false, true, null]],
        418 => [[['_route' => 'showEdt', '_controller' => 'App\\Controller\\MMAsiteController::showEdt'], ['id'], null, null, false, true, null]],
        448 => [
            [['_route' => 'ShowOffresStage', '_controller' => 'App\\Controller\\MMAsiteController::ShowOffreStage'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
