<?php

/*
** ADMIN MODULES
*/
return [






    [
        'label' => 'Menus',
        'hasChildren' => true,
        'namespaces' => [
            'CMS.footerMenu.columns',
            'CMS.footerMenu.list',
            'CMS.footerMenu.create',
            'CMS.footerMenu.update',
            'CMS.menu.list',
            'CMS.menu.create',
            'CMS.menu.update'
        ],
        'gates' => ['updateMenu'],
        'routeName' => '',
        'params' => [],
        'icon' => 'far fa-list',
        'children' => [

            [
                'label' => 'Main Menu',
                'gate' => 'updateMenu',
                'namespace' => 'menu*',
                'routeName' => 'CMS.menu.list',
                'params' => [],
            ],

            [
                'label' => 'Footer Menu',
                'gate' => 'updateMenu',
                'namespace' => 'footerMenu*',
                'routeName' => 'CMS.footerMenu.columns',
                'params' => [],
            ],




        ],
    ],

    [
        'label' => 'faq & tutorials',
        'hasChildren' => true,
        'namespaces' => [
            'CMS.faq.list',
            'CMS.faq.create',
            'CMS.faq.update',
            'CMS.tutorials.tags.list',
            'CMS.tutorials.tags.create',
            'CMS.tutorials.tags.update',
            'CMS.tutorials.list',
            'CMS.tutorials.create',
            'CMS.tutorials.update',
        ],
        'gates' => ['viewFAQ','viewTutorial'],
        'routeName' => '',
        'params' => [],
        'icon' => 'far fa-info-circle',
        'children' => [

            [
                'label' => 'faq',
                'gate' => 'viewFAQ',
                'namespace' => 'faq',
                'routeName' => 'CMS.faq.list',
                'params' => [],
            ],

            [
                'label' => 'tutorial',
                'gate' => 'viewTutorial',
                'namespace' => 'tutorials/tags',
                'routeName' => 'CMS.tutorials.tags.list',
                'params' => [],
            ],
        ],
    ],

    [
        'label' => 'About',
        'hasChildren' => true,
        'namespaces' => ['CMS.about.index',
                        'CMS.teams.list',
                        'CMS.teams.create',
                        'CMS.teams.update',
                        'CMS.experience.list',
                        'CMS.experience.create',
                        'CMS.experience.update'
                        ],
        'gates' => ['viewAbout','viewTeam','viewExperience'],
        'routeName' => '',
        'params' => [],
        'icon' => 'far fa-info-circle',
        'children' => [


            [
                'label' => 'about',
                'gate' => 'viewAbout',
                'namespace' => 'about',
                'routeName' => 'CMS.about.index',
                'params' => [],
            ],
            [
                'label' => 'team',
                'gate' => 'viewTeam',
                'namespace' => 'about/teams*',
                'routeName' => 'CMS.teams.list',
                'params' => [],
            ],

            [
                'label' => 'experience',
                'gate' => 'viewExperience',
                'namespace' => 'about/experience*',
                'routeName' => 'CMS.experience.list',
                'params' => [],
            ],



        ],
    ],

    [
        'label' => 'Privacy Policy',
        'hasChildren' => false,
        'namespaces' => ['CMS.privacy.index', 'CMS.privacy.edit'],
        'gates' => ['updatePrivacy'],
        'routeName' => 'CMS.privacy.index',
        'params' => [],
        'icon' => 'fal fa-caret-circle-up',
        'children' => [],
    ],

    [
        'label' => 'Term and Conditons',
        'hasChildren' => false,
        'namespaces' => ['CMS.terms.index', 'CMS.terms.edit'],
        'gates' => ['updateTerms'],
        'routeName' => 'CMS.terms.index',
        'params' => [],
        'icon' => 'fal fa-caret-circle-up',
        'children' => [],
    ],

    [
        'label' => 'contact',
        'hasChildren' => false,
        'namespaces' => ['CMS.contact.list', 'CMS.contact.create','CMS.contact.update'],
        'gates' => ['viewContact'],
        'routeName' => 'CMS.contact.list',
        'params' => [],
        'icon' => 'far fa-phone',
        'children' => [],
    ],

    [
        'label' => 'Subscriptions',
        'hasChildren' => false,
        'namespaces' => [
            'CMS.subscriptions.list',
        ],
        'gates' => ['viewSubscriptions'],
        'routeName' => 'CMS.subscriptions.list',
        'params' => [],
        'icon' => 'fal fa-list',
        'children' => [],
    ],

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
