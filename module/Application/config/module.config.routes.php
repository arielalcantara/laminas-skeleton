<?php

namespace Application;

use Application\Controller\HealthCheckController;

return [
    'router' => [
        'routes' => [
            'health-check' => [
                'type' => 'segment',
                'options' => [
                    'route' => '/health-check',
                    'defaults' => [
                        'controller' => HealthCheckController::class,
                        'action' => 'healthCheck'
                    ]
                ]
            ]
        ]
    ]
];

