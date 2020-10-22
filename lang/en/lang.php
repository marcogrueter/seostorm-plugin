<?php return [
    'plugin' => [
        'name' => 'SEO Storm',
        'description' => 'Total SEO page control in October',
    ],
    'permissions' => [
        'settings_tab' => 'SEO Storm',
        'config' => 'Access SEO Storm configuration',
        'og' => 'Access Open Graph tab',
        'sitemap' => 'Accsss Sitemap tab',
        'meta' => 'Access Meta tab',
        'schema' => 'Access Schema tab',
    ],
    'form_widgets' => [
        'cache_cleared' => 'Cache cleared',
        'clear_cache' => 'Clear cache',
        'clearing' => 'Clearing',
        'migrate' => 'Migrate',
        'migrating' => 'Migrating',
        'migrate_head' => 'Arcane.SEO migrator',
        'migrate_comment' => 'To migrate from Arcane.SEO plugin, click the button below. It will override your current configuration.',
        'migrate_confirm' => 'Are you sure you want to migrate the settings from Arcane.SEO?',
        'successfully_migrated' => 'The migration was successfull',
    ],
    'schemas' => [
        'id' => 'ID',
        'name' => 'Name',
        'created_at' => 'Created',
        'updated_at' => 'Updated',
        'template' => 'Template',
    ],
    'form' => [
        'settings' => [
            'label' => 'SEO Storm settings',
            'description' => 'Configure SEO Storm',
            'tab_meta' => 'Meta',
            'tab_head' => '<head>',
            'tab_robots' => 'Robots',
            'tab_minify' => 'Minify',
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
            'site_name_position' => 'Site name display',
            'site_description' => 'Default description',
            'site_description_comment' => '[data-counter]',
            'site_description_placeholder' => 'Your site description',
            'extra_meta' => 'Additional <head> content',
            'extra_meta_comment' => 'Additional meta tags',
            'enable_robots_txt' => 'Enable robots.txt',
            'enable_robots_meta' => 'Enable robots meta tags',
            'robots_txt' => 'robots.txt',
            'minify_html' => 'Minify HTML automatically',
            'minify_html_comment' => 'Front-end HTML will be minimized. Clear the cache whenever you make a change',
            'minify_css' => 'Minify CSS',
            'minify_css_comment' => 'Usage: {{ "path/to/css"|theme|minifycss }}',
            'minify_js' => 'Minify JS',
            'minify_js_comment' => 'Usage: {{ "path/to/js"|theme|minifyjs }}',
            'no_minify_for_dev' => 'Disable minification when ENV=dev',
            'no_minify_for_dev_comment' => 'Change the ENV variable in your .env file',
            'favicon_enabled' => 'Enable favicon.ico',
            'favicon_enabled_comment' => 'This will generate a route to /favicon.ico',
            'favicon_16' => 'Resize favicon to 16x16',
            'favicon' => 'Select your favicon',
            'favicon_prompt' => 'Click %s to search the media library',
            'htaccess' => 'Edit your .htaccess',
            'htaccess_comment' => '<b class="text-danger">Important:</b> If you use this, do not modify your file directly, because this field is in sync with the database aswell.',
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
            'og_locale' => 'og:locale',
            'og_locale_comment' => 'Set the locale of your site for social media (e.g. en_US). <a target="__blank" href="http://ogp.me/#optional">Click here for more info.</a>',
            'og_locale_alternate' => 'og:locale:alternate',
            'og_locale_alternate_comment' => 'Set the alternate locale of your site for social media (e.g. en_US). <a target="__blank" href="http://ogp.me/#optional">Click here for more info.</a>',
            'social_media_site_image' => 'Social media site name',
            'social_media_site_image_comment' => 'The og:site_name OG tag',
            'minify_hint_title' => 'HTML and Cache',
            'minify_hint_line_one' => 'Ajax requests with the same URL will return the first cached HTML.',
            'minify_hint_line_two' => 'This will break components that use the ajax framework from October. A workaround will be implemented soon.',
            'site_image_hint' => 'Recommended resolution of the image is 1200px x 627px',
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
            'properties' => [
                'disable_schema' => [
                    'title' => 'Disable schemas',
                    'description' => 'Enable this if you do not want to output schema scripts from the seo component',
                ]
            ],
        ],
        'schema_article' => [
            'name' => 'Article (schema.org)',
            'description' => 'Interts a schema.org article in JSON-LD',
            'properties' => [
                'headline' => [
                    'title' => 'Headline',
                    'description' => '',
                    'group' => 'Properties',
                ],
                'image' => [
                    'title' => 'Image',
                    'description' => '',
                    'group' => 'Properties',
                ]
            ],
        ],
        'schema_product' => [
            'name' => 'Product (schema.org)',
            'description' => 'Defines a schema.org product',
            'properties' => [
                'name' => [
                    'title' => 'Name',
                    'description' => '',
                ],
                'description' => [
                    'title' => 'Description',
                    'description' => '',
                ],
                'image' => [
                    'title' => 'Image',
                    'description' => '',
                ],
                'sku' => [
                    'title' => 'SKU',
                    'description' => '',
                ],
                'brand' => [
                    'title' => 'Brand',
                    'description' => '',
                ],
                'price_currency' => [
                    'title' => 'Price currency',
                    'description' => 'The currency used to describe the product price, in three-letter ISO 4217 format. ',
                ],
                'price' => [
                    'title' => 'Price',
                    'description' => 'The price of the product. Follow schema.org/price usage guidelines. ',
                ],
                'availability' => [
                    'title' => 'Availability',
                    'description' => 'Value is taken from a constrained list of options, expressed in markup using URL links. Google also understands their short names (for example InStock or OutOfStock, without the full URL scope.) Example: http://schema.org/InStock',
                ],
                'offerUrl' => [
                    'title' => 'URL',
                    'description' => '',
                ],
                'rating_value' => [
                    'title' => 'Rating value',
                    'description' => 'Rating of the product: 0-5, can accept decimals',
                ],
                'review_count' => [
                    'title' => 'Review count',
                    'description' => 'Indicate how many people have voted for the product',
                ],
            ],
        ],
        'schema_video' => [
            'name' => 'Video (schema.org)',
            'description' => 'Inserts an schema.org VideoObject',
            'properties' => [
                'name' => [
                    'title' => 'Name',
                    'description' => 'Name of the video ',
                ],
                'description' => [
                    'title' => 'Description',
                    'description' => 'Description of the video',
                ],
                'thumbnail_url' => [
                    'title' => 'Thumbnail URL',
                    'description' => 'Thumnail of the video',
                ],
                'upload_date' => [
                    'title' => 'Upload Date',
                    'description' => 'Upload date of the video',
                ],
                'duration' => [
                    'title' => 'Duration',
                    'description' => 'Duration of the video',
                ],
                'interaction_count' => [
                    'title' => 'Interaction count',
                    'description' => 'Number of times the video has been viewed ',
                ],
            ],
        ],
    ]
];
