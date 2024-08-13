<?php

return [
    /**
     * Redirect URL from SEO Manager Dashboard.
     */
    'redirect_url' => '/home',

    /**
     * Default Pagination Limit for SEO Manager.
     */
    'pagination_limit' => 10,

    /**
     * Default meta-title for the application.
     *
     * The title will be appended to the meta-title of the page.
     */
    'title' => 'Title',

    /**
     * Default meta-description for the application.
     *
     * The description will be used as the meta description of the page.
     */
    'description' => 'Description',

    /**
     * Default meta-keywords for the application.
     *
     * The keywords will be used as the meta-keywords of the page.
     */
    'keywords' => 'Keywords',

    /**
     * Default meta-robots for the application.
     *
     * Available options: index, noindex, follow, nofollow.
     */
    'robots' => 'index, follow',

    'og' => [

        /**
         * Default meta-og-title for the application.
         *
         * The title will be used as the meta-og-title of the page.
         */
        'title' => 'Title',

        /**
         * Default meta-og-description for the application.
         *
         * The description will be used as the meta-og-description of the page.
         */
        'description' => 'Description',

        /**
         * Default meta-og-image for the application.
         *
         * The image will be used as the meta-og-image of the page.
         */
        'image' => 'https://via.placeholder.com/1200x630',

        /**
         * Default meta-og-url for the application.
         *
         * The URL will be used as the meta-og-url of the page.
         */
        'url' => 'https://khanaldipesh.com.np/package/laravel-seo',
    ],
    'twitter' => [

        /**
         * Default meta-twitter-card for the application.
         *
         * Available options: summary, summary_large_image, app, player.
         */
        'card' => 'summary_large_image',

        /**
         * Default meta-twitter-title for the application.
         *
         * The title will be used as the meta-twitter-title of the page.
         */
        'title' => 'Title',

        /**
         * Default meta-twitter-description for the application.
         *
         * The description will be used as the meta-twitter-description of the page.
         */
        'description' => 'Description',

        /**
         * Default meta-twitter-image for the application.
         *
         * The image will be used as the meta-twitter-image of the page.
         */
        'image' => 'https://via.placeholder.com/1200x630',
    ],
    'schema' => [

        /**
         * Default meta-schema-type for the application.
         *
         * The type will be used as the meta-schema-type of the page.
         * Available options: WebPage, Article, BlogPosting, NewsArticle, Report, ScholarlyArticle, SocialMediaPosting, TechArticle.
         */
        'type' => 'WebPage',

        /**
         * Default meta-schema-name for the application.
         *
         * The name will be used as the meta-schema-name of the page.
         */
        'name' => 'Name',

        /**
         * Default meta-schema-description for the application.
         *
         * The description will be used as the meta-schema-description of the page.
         */
        'description' => 'Description',

        /**
         * Default meta-schema-image for the application.
         *
         * The image will be used as the meta-schema-image of the page.
         */
        'url' => 'https://khaldipesh.com.np/package/laravel-seo',
    ],
    /**
     * Excluded URLs While generating Static Url For SEO Manager. You can add the URL pattern to exclude from the SEO Manager.
     * Note: The URL pattern should be in the format of fnmatch. And the URL should be in the format of the route URI.
     *
     * All the unauthenticated routes will be excluded by default.
     */
    'excluded_urls' => [
        'password/*'
    ],

];
