<?php
return [
    'service_manager' => [
        'factories' => [
            \Auth\V1\Rest\Login\LoginResource::class => \Auth\V1\Rest\Login\LoginResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'auth.rest.login' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/login',
                    'defaults' => [
                        'controller' => 'Auth\\V1\\Rest\\Login\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'auth.rest.login',
        ],
    ],
    'api-tools-rest' => [
        'Auth\\V1\\Rest\\Login\\Controller' => [
            'listener' => \Auth\V1\Rest\Login\LoginResource::class,
            'route_name' => 'auth.rest.login',
            'route_identifier_name' => 'login_id',
            'collection_name' => 'login',
            'entity_http_methods' => [],
            'collection_http_methods' => [
                0 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Auth\V1\Rest\Login\LoginEntity::class,
            'collection_class' => \Auth\V1\Rest\Login\LoginCollection::class,
            'service_name' => 'Login',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Auth\\V1\\Rest\\Login\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Auth\\V1\\Rest\\Login\\Controller' => [
                0 => 'application/vnd.auth.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Auth\\V1\\Rest\\Login\\Controller' => [
                0 => 'application/vnd.auth.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Auth\V1\Rest\Login\LoginEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'auth.rest.login',
                'route_identifier_name' => 'login_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializable::class,
            ],
            \Auth\V1\Rest\Login\LoginCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'auth.rest.login',
                'route_identifier_name' => 'login_id',
                'is_collection' => true,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Auth\\V1\\Rest\\Login\\Controller' => [
            'input_filter' => 'Auth\\V1\\Rest\\Login\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Auth\\V1\\Rest\\Login\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'max' => '10',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'username',
                'description' => 'Username',
                'field_type' => 'string',
                'error_message' => 'Invalid username',
            ],
            1 => [
                'required' => true,
                'validators' => [
                    0 => [
                        'name' => \Laminas\Validator\StringLength::class,
                        'options' => [
                            'max' => '255',
                        ],
                    ],
                ],
                'filters' => [
                    0 => [
                        'name' => \Laminas\Filter\StringTrim::class,
                        'options' => [],
                    ],
                    1 => [
                        'name' => \Laminas\Filter\StripTags::class,
                        'options' => [],
                    ],
                ],
                'name' => 'password',
                'description' => 'Password',
                'field_type' => 'string',
                'error_message' => 'Invalid password',
            ],
        ],
    ],
];
