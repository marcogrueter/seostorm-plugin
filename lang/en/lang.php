<?php return [
    'plugin' => [
        'name' => 'SEO Storm',
        'description' => 'Total SEO page control in October',
    ],
    'permissions' => [
        'settings_tab' => 'SEO Storm',
        'config' => 'Access SEO Storm configuration',
    ],
    'form_widgets' => [
        'migrate' => 'Migrate',
        'migrating' => 'Migrating',
        'migrate_head' => 'Arcane.SEO migrator',
        'migrate_comment' => 'To migrate from Arcane.SEO plugin, click the button below. It will override your current configuration.',
        'migrate_confirm' => 'Are you sure you want to migrate the settings from Arcane.SEO?',
        'successfully_migrated' => 'The migration was successfull',
    ],
    'form' => [
        'general' => [
            'meta_title_label' => 'Page title',
            'meta_description_label' => 'Page description',
            'og_title_label' => 'OG:title',
            'og_title_comment' => 'Recommended 50-60 characters',
            'og_title_placeholder' => 'Title of the page',
            'og_description_label' => 'OG:description',
            'og_description_comment' => 'The optimal length is 155',
            'og_description_placeholder' => 'Description of the page',
            'canonical_url_label' => 'Canonical URL',
            'canonical_url_comment' => 'The canonical URL this page should point to. You can use twig syntax here',
            'robot_index_label' => 'Robots index',
            'robot_index_comment' => 'Specify if search engines should index this page',
            'robot_follow_label' => 'Robots follow',
            'robot_follow_comment' => 'Specify if search engines should follow the links on this page',
            'robot_advanced_label' => 'Advanced robots',
            'robot_advanced_comment' => 'Add aditional directives to the robots meta tag, you can also use twig syntax here',
            'robot_empty' => 'Don\'t set',
            'enabled_in_sitemap_label' => 'Enable in the sitemap.xml',
            'enabled_in_sitemap_comment' => 'Page will appear in the sitemap.xml',
            'use_updated_at_label' => 'Use "updated_at" from the model as "Last time modified"',
            'use_updated_at_comment' => 'If the updated_at field isnt available in the model it will default to the files last time modified aka: <b>Page::$mtime</b>',
            'lastmod_label' => 'Last time modified',
            'lastmod_comment' => 'Date and time this page was last modified (will be overwritten by the updated_at if checked)',
            'changefreq_label' => 'Changing frequency',
            'changefreq_comment' => 'Tell search engines how frequently this page changes',
            'priority_label' => 'Priority',
            'priority_comment' => 'Rank the importance of the page to search engines',
            'og_type_label' => 'OG:type',
            'og_type_comment' => 'Defaults to website',
            'og_type_placeholder' => 'website article video etc...',
            'og_card_label' => 'OG:card',
            'og_ref_image_label' => 'OG:image',
            'og_ref_image_comment' => 'This will take priority over OG:image',
            'og_ref_image_placeholder' => 'Path to image',
            'og_image_label' => 'OG:image',
            'og_image_comment' => 'OG:image from media library',
            'tab_meta' => 'Meta',
            'tab_sitemap' => 'Sitemap',
            'tab_open_graph' => 'Open Graph',
            'model_class_label' => 'Model class',
            'model_class_comment' => 'Associate this page with a model links will be generated from it\'s records',
            'model_class_placeholder' => 'Author\Plugin\Models\ModelClass',
            'model_scope_label' => 'Model scope',
            'model_scope_comment' => 'Filter the records using this scope',
            'model_scope_placeholder' => 'e.g. isPublished',
            'model_params_label' => 'Model parameters',
            'model_params_comment' => 'Get the URL parameters from related objects',
            'model_params_placeholder' => 'slug:slug|categorySlug:category.slug',
        ],
        'settings' => [
            'category_label' => 'SEO Storm',
            'label' => 'General settings',
            'description' => 'Configure SEO Storm',
            'tab_meta' => 'Meta',
            'tab_sitemap' => 'Sitemap',
            'tab_head' => '<head>',
            'tab_robots' => 'Robots',
            'tab_favicon' => 'Favicon',
            'tab_htaccess' => '.htaccess',
            'tab_social_media' => 'Social Media',
            'tab_migrate' => 'Migrate',
            'enable_site_meta' => 'Enable title and description meta tags',
            'enable_sitemap' => 'Enable sitemap.xml',
            'site_name' => 'Site name',
            'site_name_placeholder' => 'Your site name',
            'site_name_position' => 'Site name display',
            'site_name_position_prefix' => 'Prefix (at the start)',
            'site_name_position_suffix' => 'Suffix (at the end)',
            'site_name_position_nowhere' => 'Nowhere (does not appear)',
            'site_name_position_commentAbove' => 'Select how the site name should appear in the title',
            'site_name_separator' => 'Site name separator',
            'site_name_separator_placeholder' => '|',
            'site_name_separator_comment' => 'Character to separate site name from title, eg: Page Title|SiteName',
            'site_description' => 'Default description',
            'site_description_placeholder' => 'Your site description',
            'extra_meta' => 'Additional <head> content',
            'extra_meta_comment' => 'Additional meta tags',
            'enable_robots_txt' => 'Enable robots.txt',
            'enable_robots_meta' => 'Enable robots meta tags',
            'robots_txt' => 'robots.txt',
            'favicon_enabled' => 'Enable favicon.ico',
            'favicon_enabled_comment' => 'This will generate a route to /favicon.ico',
            'favicon_16' => 'Resize favicon to 16x16',
            'favicon' => 'Select your favicon',
            'favicon_prompt' => 'Click %s to search the media library',
            'enable_og' => 'Enable Open Graph',
            'enable_og_comment' => 'Display the Open Graph meta tags',
            'site_image_from' => 'Where to get default site image from',
            'site_image_from_media' => 'Media',
            'site_image_from_fileupload' => 'File upload',
            'site_image_from_url' => 'Url',
            'site_image' => 'Site image',
            'site_image_prompt' => 'Drag files or click here',
            'fb_app_id' => 'Facebook App ID',
            'fb_app_id_comment' => 'The fb:app_id OG tag',
            'fb_app_id' => 'Facebook App ID',
            'fb_app_id_comment' => 'The fb:app_id OG tag',
            'twitter_site' => 'Twitter:site',
            'twitter_site_comment' => '@username for the website used in the card footer.',
            'twitter_creator' => 'Twitter:creator',
            'twitter_creator_comment' => '@username for the content creator / author.',
            'og_locale' => 'OG:locale',
            'og_locale_comment' => 'Set the locale of your site for social media (e.g. en_US). <a target="__blank" href="http://ogp.me/#optional">Click here for more info.</a>',
            'og_locale_alternate' => 'OG:locale:alternate',
            'og_locale_alternate_comment' => 'Set the alternate locale of your site for social media (e.g. en_US). <a target="__blank" href="http://ogp.me/#optional">Click here for more info.</a>',
            'site_image_hint' => 'Recommended resolution of the image is 1200px x 627px',
            'og_site_name' => 'OG:site_name',
            'og_site_name_comment' => 'If your object is part of a larger web site, the name which should be displayed for the overall site. e.g., "Init".',
        ],
        'htaccess' => [
            'label' => '.htaccess',
            'description' => 'Manage .htaccess file',
        ]
    ],
    'components' => [
        'group' => [
            'properties' => 'Properties',
            'product' => 'Product',
            'offer' => 'Offer',
            'reviews' => 'Reviews',
        ],
        'seo' => [
            'name' => 'Seo',
            'description' => 'Renders SEO meta tags in place',
        ],
    ],
    'editor' => [
        'translate' => 'Translate SEO'
    ]
];
