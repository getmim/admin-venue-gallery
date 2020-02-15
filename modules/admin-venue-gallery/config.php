<?php

return [
    '__name' => 'admin-venue-gallery',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-venue-gallery.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-venue-gallery' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'admin-venue' => NULL
            ],
            [
                'venue-gallery' => NULL
            ],
            [
                'admin-gallery' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.venue.edit' => [
                'gallery_food' => [
                    'label' => 'Food',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type'=>'gallery']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Gallery\\Model\\gallery',
                            'field' => 'id'
                        ]
                    ]
                ],
                'gallery_atmosphere' => [
                    'label' => 'Atmosphere',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type'=>'gallery']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Gallery\\Model\\gallery',
                            'field' => 'id'
                        ]
                    ]
                ],
                'gallery_employee' => [
                    'label' => 'Employee',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type'=>'gallery']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Gallery\\Model\\gallery',
                            'field' => 'id'
                        ]
                    ]
                ],
                'gallery_property' => [
                    'label' => 'Property',
                    'type' => 'select',
                    'sl-filter' => [
                        'route' => 'adminObjectFilter',
                        'params' => [],
                        'query' => ['type'=>'gallery']
                    ],
                    'rules' => [
                        'exists' => [
                            'model' => 'Gallery\\Model\\gallery',
                            'field' => 'id'
                        ]
                    ]
                ]
            ]
        ]
    ]
];