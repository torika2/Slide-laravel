<?php

/*
** ADMIN MODULES
*/
return [

    [
        'label' => 'Seo',
        'hasChildren' => false,
        'namespaces' => ['CMS.seo.index', 'CMS.seo.edit'],
        'gates' => ['viewSeo'],
        'routeName' => 'CMS.seo.index',
        'params' => [],
        'icon' => 'far fa-search',
        'children' => [],
    ],




    //USERS BLOCK
    [
        'label' => 'Users',
        'hasChildren' => true,
        'namespaces' => ['CMS.user.list', 'CMS.user.add', 'CMS.user.edit', 'CMS.user.other',
            'CMS.user.roles',],
        'gates' => ['viewUser', 'viewRoles'],
        'routeName' => '',
        'params' => [],
        'icon' => 'fal fa-user',
        'children' => [


            [
                'label' => 'users',
                'gate' => 'viewUser',
                'namespace' => 'users',
                'routeName' => 'CMS.user.list',
                'params' => [],
            ],

            [
                'label' => 'roles & permissions',
                'gate' => 'viewRoles',
                'namespace' => 'users/roles*',
                'routeName' => 'CMS.user.roles',
                'params' => [],
            ],

        ],
    ],

    //LANGUAGES BLOCK
    [
        'label' => 'Languages',
        'hasChildren' => true,
        'namespaces' => ['CMS.language.list', 'CMS.language.setlocale', 'CMS.translations.list'],
        'gates' => ['viewLanguage', 'viewTranslation'],
        'routeName' => '',
        'params' => [],
        'icon' => 'fal fa-globe',
        'children' => [
            [
                'label' => 'Languages',
                'gate' => 'viewLanguage',
                'namespace' => 'languages',
                'routeName' => 'CMS.language.list',
                'params' => [],
            ],
            [
                'label' => 'Translations',
                'gate' => 'viewTranslation',
                'namespace' => 'translations*',
                'routeName' => 'CMS.translations.list',
                'params' => [],
            ],

        ],
    ],

    //SETTINGS BLOCK
    [
        'label' => 'Settings',
        'hasChildren' => false,
        'namespaces' => ['CMS.settings'],
        'gates' => ['viewSettings'],
        'routeName' => 'CMS.settings',
        'params' => [],
        'icon' => 'fal fa-cog',
        'children' => [],
    ],

    [
        'label' => 'logs',
        'hasChildren' => false,
        'namespaces' => ['log.list'],
        'gates' => ['viewLog'],
        'routeName' => 'log.list',
        'params' => [],
        'icon' => 'fal fa-database',
        'children' => [],
    ],

];
