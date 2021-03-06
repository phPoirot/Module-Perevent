<?php
use Module\HttpFoundation\Events\Listener\ListenerDispatch;

return [
    'perevent'  => [
        'route' => 'RouteSegment',
        'options' => [
            'criteria'    => '/perevent',
            'match_whole' => false,
        ],

        'routes' => [

            ## GET /perevent/{{cmd_hash}}
            'fire' => [
                'route'   => 'RouteSegment',
                'options' => [
                    'criteria' => '/:perevent~\w+~/:cmd_hash~\w.+~',
                    'match_whole' => true,
                ],
                'params'  => [
                    ListenerDispatch::ACTIONS => [
                        '/module/perevent/actions/FireEventAction',
                    ],
                    'perevent' => 'default' // default perevent manager
                ],
            ],

        ], // end content routes

    ],
];
