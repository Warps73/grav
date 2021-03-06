<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/_xampp/htdocs/Timothy/Grav/grav-admin-v1.5.5/grav-admin/user/plugins/form-database/blueprints.yaml',
    'modified' => 1543493651,
    'data' => [
        'name' => 'Form Database',
        'version' => '1.0.0',
        'description' => 'Save Forms in a MySQL Database',
        'icon' => 'plug',
        'author' => [
            'name' => 'Andy Scherer',
            'email' => 'ofee42@gmail.com'
        ],
        'homepage' => 'https://github.com/scan5415/grav-plugin-form-database',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'grav, plugin, form, database',
        'bugs' => 'https://github.com/scan5415/grav-plugin-form-database',
        'readme' => 'https://github.com/scan5415/grav-plugin-form-database/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'mysql_server' => [
                    'type' => 'text',
                    'label' => 'MySQL Servername',
                    'help' => 'IP or Name of MySQL Servername'
                ],
                'mysql_port' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'MySQL Server Port',
                    'default' => '3306'
                ],
                'mysql_username' => [
                    'type' => 'text',
                    'label' => 'MySQL Username'
                ],
                'mysql_password' => [
                    'type' => 'password',
                    'label' => 'MySQL Password'
                ]
            ]
        ]
    ]
];
