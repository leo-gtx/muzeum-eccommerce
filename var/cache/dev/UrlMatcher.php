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
        '/admin' => [[['_route' => 'admin_admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/order-counts' => [[['_route' => 'admin_order_counts', '_controller' => 'App\\Controller\\Admin\\AdminController::getOrderCounts'], null, ['GET' => 0], null, false, false, null]],
        '/admin/category' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'admin_comment_index', '_controller' => 'App\\Controller\\Admin\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comment/new' => [[['_route' => 'admin_comment_new', '_controller' => 'App\\Controller\\Admin\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/event' => [[['_route' => 'admin_event_index', '_controller' => 'App\\Controller\\Admin\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/event/new' => [[['_route' => 'admin_event_new', '_controller' => 'App\\Controller\\Admin\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/image' => [[['_route' => 'admin_image_index', '_controller' => 'App\\Controller\\Admin\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages_index', '_controller' => 'App\\Controller\\Admin\\MessagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages/new' => [[['_route' => 'admin_messages_new', '_controller' => 'App\\Controller\\Admin\\MessagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/setting' => [[['_route' => 'setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/setting/new' => [[['_route' => 'setting_new', '_controller' => 'App\\Controller\\Admin\\SettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'home_about', '_controller' => 'App\\Controller\\HomeController::abouts'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'home_contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\HomeController::sitemap'], null, null, null, false, false, null]],
        '/user/image' => [[['_route' => 'user_image_index', '_controller' => 'App\\Controller\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/detail' => [[['_route' => 'order_detail_index', '_controller' => 'App\\Controller\\OrderDetailController::index'], null, ['GET' => 0], null, true, false, null]],
        '/order/detail/new' => [[['_route' => 'order_detail_new', '_controller' => 'App\\Controller\\OrderDetailController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/orders' => [[['_route' => 'orders_index', '_controller' => 'App\\Controller\\OrdersController::index'], null, ['GET' => 0], null, true, false, null]],
        '/orders/new' => [[['_route' => 'orders_new', '_controller' => 'App\\Controller\\OrdersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/product' => [[['_route' => 'user_product_index', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/product/new' => [[['_route' => 'user_product_new', '_controller' => 'App\\Controller\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/sample' => [[['_route' => 'sample', '_controller' => 'App\\Controller\\SampleController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/loginuser' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\SecurityController::loginuser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/shopcart' => [[['_route' => 'shopcart_index', '_controller' => 'App\\Controller\\ShopcartController::index'], null, ['GET' => 0], null, true, false, null]],
        '/shopcart/new' => [[['_route' => 'shopcart_new', '_controller' => 'App\\Controller\\ShopcartController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/comments' => [[['_route' => 'user_comments', '_controller' => 'App\\Controller\\UserController::comments'], null, ['GET' => 0], null, false, false, null]],
        '/user/products' => [[['_route' => 'user_products', '_controller' => 'App\\Controller\\UserController::products'], null, ['GET' => 0], null, false, false, null]],
        '/user/orders' => [[['_route' => 'user_orders', '_controller' => 'App\\Controller\\UserController::orders'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userpanel' => [[['_route' => 'userpanel', '_controller' => 'App\\Controller\\Userpanel\\UserpanelController::index'], null, null, null, true, false, null]],
        '/userpanel/edit' => [[['_route' => 'userpanel_edit', '_controller' => 'App\\Controller\\Userpanel\\UserpanelController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/userpanel/show' => [[['_route' => 'userpanel_show', '_controller' => 'App\\Controller\\Userpanel\\UserpanelController::show'], null, ['GET' => 0], null, false, false, null]],
        '/shopcart/cart/count' => [[['_route' => 'shopcart_count', '_controller' => 'App\\Controller\\ShopcartController::getCartCount'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/admin(?'
                    .'|/(?'
                        .'|orders/(?'
                            .'|([^/]++)(*:200)'
                            .'|show/([^/]++)(*:221)'
                        .')'
                        .'|c(?'
                            .'|ategory/([^/]++)(?'
                                .'|(*:253)'
                                .'|/edit(*:266)'
                                .'|(*:274)'
                            .')'
                            .'|omment/([^/]++)(?'
                                .'|(*:301)'
                                .'|/edit(*:314)'
                                .'|(*:322)'
                            .')'
                        .')'
                        .'|event/([^/]++)(?'
                            .'|(*:349)'
                            .'|/edit(*:362)'
                            .'|(*:370)'
                        .')'
                        .'|image/(?'
                            .'|new/([^/]++)(*:400)'
                            .'|([^/]++)(?'
                                .'|(*:419)'
                                .'|/(?'
                                    .'|edit(*:435)'
                                    .'|([^/]++)(*:451)'
                                .')'
                            .')'
                        .')'
                        .'|messages/([^/]++)(?'
                            .'|(*:482)'
                            .'|/edit(*:495)'
                            .'|(*:503)'
                        .')'
                        .'|product/([^/]++)(?'
                            .'|(*:531)'
                            .'|/edit(*:544)'
                            .'|(*:552)'
                        .')'
                        .'|setting/([^/]++)(?'
                            .'|(*:580)'
                            .'|/edit(*:593)'
                            .'|(*:601)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:626)'
                            .'|/edit(*:639)'
                            .'|(*:647)'
                        .')'
                    .')'
                    .'|order/([^/]++)/update(*:678)'
                .')'
                .'|/product/([^/]++)(*:704)'
                .'|/user/(?'
                    .'|image/(?'
                        .'|new/([^/]++)(*:742)'
                        .'|([^/]++)(?'
                            .'|(*:761)'
                            .'|/edit(*:774)'
                            .'|(*:782)'
                        .')'
                    .')'
                    .'|product/(?'
                        .'|([^/]++)(?'
                            .'|(*:814)'
                            .'|/edit(*:827)'
                            .'|(*:835)'
                        .')'
                        .'|download/([^/]++)(*:861)'
                    .')'
                    .'|(\\d+)(*:875)'
                    .'|([^/]++)(?'
                        .'|/edit(*:899)'
                        .'|(*:907)'
                    .')'
                    .'|newcomment/([^/]++)(*:935)'
                    .'|deletecomment/([^/]++)(*:965)'
                    .'|favorite(?'
                        .'|/([^/]++)(*:993)'
                        .'|s(*:1002)'
                    .')'
                    .'|library(*:1019)'
                .')'
                .'|/order(?'
                    .'|/detail/([^/]++)(?'
                        .'|(*:1057)'
                        .'|/edit(*:1071)'
                        .'|(*:1080)'
                    .')'
                    .'|s/(?'
                        .'|confirm/([^/]++)(*:1111)'
                        .'|([^/]++)(?'
                            .'|(*:1131)'
                            .'|/edit(*:1145)'
                            .'|(*:1154)'
                        .')'
                    .')'
                .')'
                .'|/shopcart/([^/]++)(?'
                    .'|(*:1187)'
                    .'|/(?'
                        .'|edit(*:1204)'
                        .'|del(*:1216)'
                    .')'
                    .'|(*:1226)'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1290)'
                    .'|([A-z0-9_-]*)/(.+)(*:1317)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'admin_orders_index', '_controller' => 'App\\Controller\\Admin\\AdminController::orders'], ['slug'], null, null, false, true, null]],
        221 => [[['_route' => 'admin_orders_show', '_controller' => 'App\\Controller\\Admin\\AdminController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        301 => [[['_route' => 'admin_comment_show', '_controller' => 'App\\Controller\\Admin\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        314 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\Admin\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        322 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        349 => [[['_route' => 'admin_event_show', '_controller' => 'App\\Controller\\Admin\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'admin_event_edit', '_controller' => 'App\\Controller\\Admin\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        370 => [[['_route' => 'admin_event_delete', '_controller' => 'App\\Controller\\Admin\\EventController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        400 => [[['_route' => 'admin_image_new', '_controller' => 'App\\Controller\\Admin\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        419 => [[['_route' => 'admin_image_show', '_controller' => 'App\\Controller\\Admin\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        435 => [[['_route' => 'admin_image_edit', '_controller' => 'App\\Controller\\Admin\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        451 => [[['_route' => 'admin_image_delete', '_controller' => 'App\\Controller\\Admin\\ImageController::delete'], ['id', 'pid'], ['DELETE' => 0], null, false, true, null]],
        482 => [[['_route' => 'admin_messages_show', '_controller' => 'App\\Controller\\Admin\\MessagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        495 => [[['_route' => 'admin_messages_edit', '_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        503 => [[['_route' => 'admin_messages_delete', '_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        531 => [[['_route' => 'admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        544 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        552 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        580 => [[['_route' => 'setting_show', '_controller' => 'App\\Controller\\Admin\\SettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        593 => [[['_route' => 'setting_edit', '_controller' => 'App\\Controller\\Admin\\SettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        601 => [[['_route' => 'setting_delete', '_controller' => 'App\\Controller\\Admin\\SettingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        626 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        639 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        647 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        678 => [[['_route' => 'admin_orders_update', '_controller' => 'App\\Controller\\Admin\\AdminController::order_update'], ['id'], ['POST' => 0], null, false, false, null]],
        704 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\HomeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        742 => [[['_route' => 'user_image_new', '_controller' => 'App\\Controller\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        761 => [[['_route' => 'user_image_show', '_controller' => 'App\\Controller\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        774 => [[['_route' => 'user_image_edit', '_controller' => 'App\\Controller\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        782 => [[['_route' => 'user_image_delete', '_controller' => 'App\\Controller\\ImageController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        814 => [[['_route' => 'user_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        827 => [[['_route' => 'user_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        835 => [[['_route' => 'user_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        861 => [[['_route' => 'product_download', '_controller' => 'App\\Controller\\ProductController::downloadFile'], ['id'], ['GET' => 0], null, false, true, null]],
        875 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        899 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        907 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        935 => [[['_route' => 'user_new_comment', '_controller' => 'App\\Controller\\UserController::newcomment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        965 => [[['_route' => 'user_delete_comment', '_controller' => 'App\\Controller\\UserController::deletecomment'], ['id'], ['DELETE' => 0], null, false, true, null]],
        993 => [[['_route' => 'user_toggle_favorite', '_controller' => 'App\\Controller\\UserController::toggle'], ['id'], ['GET' => 0], null, false, true, null]],
        1002 => [[['_route' => 'user_show_favorites', '_controller' => 'App\\Controller\\UserController::showFavorites'], [], null, null, false, false, null]],
        1019 => [[['_route' => 'user_library', '_controller' => 'App\\Controller\\UserController::library'], [], null, null, false, false, null]],
        1057 => [[['_route' => 'order_detail_show', '_controller' => 'App\\Controller\\OrderDetailController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1071 => [[['_route' => 'order_detail_edit', '_controller' => 'App\\Controller\\OrderDetailController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1080 => [[['_route' => 'order_detail_delete', '_controller' => 'App\\Controller\\OrderDetailController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1111 => [[['_route' => 'orders_confirm', '_controller' => 'App\\Controller\\OrdersController::confirm'], ['id'], ['GET' => 0], null, false, true, null]],
        1131 => [[['_route' => 'orders_show', '_controller' => 'App\\Controller\\OrdersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1145 => [[['_route' => 'orders_edit', '_controller' => 'App\\Controller\\OrdersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1154 => [[['_route' => 'orders_delete', '_controller' => 'App\\Controller\\OrdersController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1187 => [[['_route' => 'shopcart_show', '_controller' => 'App\\Controller\\ShopcartController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1204 => [[['_route' => 'shopcart_edit', '_controller' => 'App\\Controller\\ShopcartController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1216 => [[['_route' => 'shopcart_del', '_controller' => 'App\\Controller\\ShopcartController::del'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1226 => [[['_route' => 'shopcart_delete', '_controller' => 'App\\Controller\\ShopcartController::delete'], ['id'], null, null, false, true, null]],
        1290 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1317 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
