<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/abonnement' => [[['_route' => 'app_abonnement_index', '_controller' => 'App\\Controller\\AbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/abonnement/new' => [[['_route' => 'app_abonnement_new', '_controller' => 'App\\Controller\\AbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/actualite' => [[['_route' => 'actualite', '_controller' => 'App\\Controller\\ActualiteController::index'], null, null, null, false, false, null]],
        '/AfficherA' => [[['_route' => 'AfficherA', '_controller' => 'App\\Controller\\ActualiteController::Afficher'], null, null, null, false, false, null]],
        '/AjouterA' => [[['_route' => 'AjouterA', '_controller' => 'App\\Controller\\ActualiteController::ajouter'], null, null, null, false, false, null]],
        '/ModifierA' => [[['_route' => 'ModifierA', '_controller' => 'App\\Controller\\ActualiteController::Modifier'], null, null, null, false, false, null]],
        '/Afficherfront' => [[['_route' => 'Afficherfront', '_controller' => 'App\\Controller\\ActualiteController::Afficherfront'], null, null, null, false, false, null]],
        '/Afficheractualite' => [[['_route' => 'Afficheractualite', '_controller' => 'App\\Controller\\ActualiteController::afficherActualite'], null, null, null, false, false, null]],
        '/ad' => [[['_route' => 'app_ad', '_controller' => 'App\\Controller\\AdController::index'], null, null, null, false, false, null]],
        '/admin/unconfirmed-users' => [[['_route' => 'app_admin_unconfirmed_users', '_controller' => 'App\\Controller\\AdController::unconfirmedUsers'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/athlete' => [[['_route' => 'app_athlete_index', '_controller' => 'App\\Controller\\AthleteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/athlete/new' => [[['_route' => 'app_athlete_new', '_controller' => 'App\\Controller\\AthleteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/athlete/error' => [[['_route' => 'app_athlete_error', '_controller' => 'App\\Controller\\AthleteController::error'], null, null, null, false, false, null]],
        '/back' => [[['_route' => 'app_back_index', '_controller' => 'App\\Controller\\BackController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/new' => [[['_route' => 'app_back_new', '_controller' => 'App\\Controller\\BackController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/api/search' => [[['_route' => 'api_search', '_controller' => 'App\\Controller\\BackController::search'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/AfficherC' => [[['_route' => 'AfficherC', '_controller' => 'App\\Controller\\CategorieController::Afficher'], null, null, null, false, false, null]],
        '/AjouterC' => [[['_route' => 'AjouterC', '_controller' => 'App\\Controller\\CategorieController::ajouter'], null, null, null, false, false, null]],
        '/ModifierC' => [[['_route' => 'ModifierC', '_controller' => 'App\\Controller\\CategorieController::Modifier'], null, null, null, false, false, null]],
        '/competition' => [[['_route' => 'app_competition_index', '_controller' => 'App\\Controller\\CompetitionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/competition/new' => [[['_route' => 'app_competition_new', '_controller' => 'App\\Controller\\CompetitionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/new' => [[['_route' => 'app_Equipe_new', '_controller' => 'App\\Controller\\EquipeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/consulterequipe' => [[['_route' => 'app_equipe_index', '_controller' => 'App\\Controller\\EquipeController::liste'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\ErrorController::index'], null, null, null, false, false, null]],
        '/evennement' => [[['_route' => 'app_evennement', '_controller' => 'App\\Controller\\EvennementController::index'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgotPassword'], null, null, null, false, false, null]],
        '/tournoi' => [[['_route' => 'app_tournoi_index', '_controller' => 'App\\Controller\\TournoiController::index'], null, ['GET' => 0], null, true, false, null]],
        '/tournoi/new' => [[['_route' => 'app_tournoi_new', '_controller' => 'App\\Controller\\TournoiController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/unverified' => [
            [['_route' => 'app_unverified', '_controller' => 'App\\Controller\\UnverifiedController::index'], null, null, null, false, false, null],
            [['_route' => 'unverified', '_controller' => 'App\\Controller\\UnverifiedController::index'], null, null, null, false, false, null],
        ],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::indexx'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/404' => [[['_route' => 'not_found', '_controller' => 'App\\Controller\\ErrorController::showNotFound'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|bonnement/([^/]++)(?'
                        .'|(*:33)'
                        .'|/edit(*:45)'
                        .'|(*:52)'
                    .')'
                    .'|dmin/(?'
                        .'|confirm\\-user/([^/]++)(*:90)'
                        .'|reject\\-user/([^/]++)(*:118)'
                    .')'
                    .'|thlete/([^/]++)(?'
                        .'|(*:145)'
                        .'|/(?'
                            .'|edit(*:161)'
                            .'|competition/new(*:184)'
                            .'|tournoi(*:199)'
                        .')'
                        .'|(*:208)'
                    .')'
                .')'
                .'|/Supprimer(?'
                    .'|A/([^/]++)(*:241)'
                    .'|C/([^/]++)(*:259)'
                .')'
                .'|/AfficherA/([^/]++)/export\\-pdf(*:299)'
                .'|/back/([^/]++)(?'
                    .'|(*:324)'
                    .'|/edit(*:337)'
                    .'|(*:345)'
                .')'
                .'|/competition/(?'
                    .'|([^/]++)(?'
                        .'|(*:381)'
                        .'|/edit(*:394)'
                        .'|(*:402)'
                    .')'
                    .'|athlete/([^/]++)/competition/new(*:443)'
                .')'
                .'|/show/([^/]++)(*:466)'
                .'|/([^/]++)/(?'
                    .'|edit(*:491)'
                    .'|delete(*:505)'
                .')'
                .'|/reset\\-password/([^/]++)(*:539)'
                .'|/tournoi/([^/]++)(?'
                    .'|(*:567)'
                    .'|/(?'
                        .'|edit(*:583)'
                        .'|assign\\-athlete(*:606)'
                        .'|pdf(*:617)'
                    .')'
                    .'|(*:626)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:652)'
                    .'|/(?'
                        .'|edit(*:668)'
                        .'|assign\\-abonnement/([^/]++)(*:703)'
                        .'|pdf(*:714)'
                    .')'
                    .'|(*:723)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:763)'
                    .'|wdt/([^/]++)(*:783)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:829)'
                            .'|router(*:843)'
                            .'|exception(?'
                                .'|(*:863)'
                                .'|\\.css(*:876)'
                            .')'
                        .')'
                        .'|(*:886)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'app_abonnement_show', '_controller' => 'App\\Controller\\AbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        45 => [[['_route' => 'app_abonnement_edit', '_controller' => 'App\\Controller\\AbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        52 => [[['_route' => 'app_abonnement_delete', '_controller' => 'App\\Controller\\AbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_admin_confirm_user', '_controller' => 'App\\Controller\\AdController::confirmUser'], ['id'], ['POST' => 0], null, false, true, null]],
        118 => [[['_route' => 'app_admin_reject_user', '_controller' => 'App\\Controller\\AdController::rejectUser'], ['id'], ['POST' => 0], null, false, true, null]],
        145 => [[['_route' => 'app_athlete_show', '_controller' => 'App\\Controller\\AthleteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        161 => [[['_route' => 'app_athlete_edit', '_controller' => 'App\\Controller\\AthleteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [[['_route' => 'app_com', '_controller' => 'App\\Controller\\AthleteController::neeew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        199 => [[['_route' => 'athlete_tournoi', '_controller' => 'App\\Controller\\AthleteController::participerEvenement'], ['id'], ['GET' => 0], null, true, false, null]],
        208 => [[['_route' => 'app_athlete_delete', '_controller' => 'App\\Controller\\AthleteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        241 => [[['_route' => 'SupprimerA', '_controller' => 'App\\Controller\\ActualiteController::Supprimer'], ['id'], null, null, false, true, null]],
        259 => [[['_route' => 'SupprimerC', '_controller' => 'App\\Controller\\CategorieController::Supprimer'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'export_actualite', '_controller' => 'App\\Controller\\ActualiteController::exportAction'], ['id'], null, null, false, false, null]],
        324 => [[['_route' => 'app_back_show', '_controller' => 'App\\Controller\\BackController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_back_edit', '_controller' => 'App\\Controller\\BackController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        345 => [[['_route' => 'app_back_delete', '_controller' => 'App\\Controller\\BackController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        381 => [[['_route' => 'app_competition_show', '_controller' => 'App\\Controller\\CompetitionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_competition_edit', '_controller' => 'App\\Controller\\CompetitionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        402 => [[['_route' => 'app_competition_delete', '_controller' => 'App\\Controller\\CompetitionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        443 => [[['_route' => 'app_compe', '_controller' => 'App\\Controller\\CompetitionController::neeew'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'app_equipe_show', '_controller' => 'App\\Controller\\EquipeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        491 => [[['_route' => 'app_Equipe_edit', '_controller' => 'App\\Controller\\EquipeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_Equipe_delete', '_controller' => 'App\\Controller\\EquipeController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        539 => [[['_route' => 'reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null]],
        567 => [[['_route' => 'app_tournoi_show', '_controller' => 'App\\Controller\\TournoiController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        583 => [[['_route' => 'app_tournoi_edit', '_controller' => 'App\\Controller\\TournoiController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        606 => [[['_route' => 'tournoi_assign_athlete', '_controller' => 'App\\Controller\\TournoiController::assignAthlete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        617 => [[['_route' => 'app_tournoi_pdf', '_controller' => 'App\\Controller\\TournoiController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        626 => [[['_route' => 'app_tournoi_delete', '_controller' => 'App\\Controller\\TournoiController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        652 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        668 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        703 => [[['_route' => 'app_user_assign', '_controller' => 'App\\Controller\\UserController::assignAbonnementToUser'], ['userId', 'abonnementId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        714 => [[['_route' => 'app_user_pdf', '_controller' => 'App\\Controller\\UserController::pdf'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        723 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        763 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        783 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        829 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        843 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        863 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        876 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        886 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
