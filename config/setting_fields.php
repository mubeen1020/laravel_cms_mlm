<?php

return [

    'app' => [
        'title' => 'General',
        'desc' => '',
        'icon' => 'fa fa-home',
        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'title',
                'label' => 'Site Title',
                'rules' => 'required|min:2|max:50'
            ],
            [
                'type' => 'textarea',
                'data' => 'string',
                'name' => 'description',
                'label' => 'SEO Description',
                'rules' => ''
            ],
            [
                'type' => 'textarea',
                'data' => 'string',
                'name' => 'keywords',
                'label' => 'SEO Tags',
                'rules' => ''
            ],
            [
                'name' => 'logo',
                'type' => 'image',
                'data' => 'file',
                'label' => 'Logo',
                'rules' => 'image|mimes:jpeg,png,jpg,gif|max:500',
            ],
            [
                'name' => 'email',
                'type' => 'email',
                'label' => 'Email',
                'rules' => 'email',
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'phone',
                'label' => 'Telephone',
                'rules' => ''
            ], 
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'whatsapp',
                'label' => 'Whatsapp',
                'rules' => ''
            ], 
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'fax',
                'label' => 'Fax',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'address',
                'label' => 'Address',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'map',
                'label' => 'Map Url',
                'rules' => ''
            ],
        ]
    ],

    'email' => [
        'title' => 'Email',
        'desc' => '',
        'icon' => 'fa-envelope',
        'elements' => [
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'mail_host',
                'label' => 'E-Mail Server',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'mail_username',
                'label' => 'E-mail address',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'mail_password',
                'label' => 'Password',
                'rules' => ''
            ],
            [
                'type' => 'select',
                'data' => 'string',
                'options' => [
                    'ssl' => 'SSL',
                    'tls' => 'TLS',
                ],
                'name' => 'mail_encryption',
                'label' => 'Encryption Type',
                'rules' => ''
            ],
            [
                'type' => 'text',
                'data' => 'string',
                'name' => 'mail_from_name',
                'label' => 'What Name Should You Send With?',
                'rules' => ''
            ],
        ]
    ]
];