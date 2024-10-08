    <!--
    SEO Tags Generated by Laravel SEO Manager Package.
    Author: Dipesh79
    Version: 1.0.0
    url: https://github.com/dipesh79/laravel-seo-manager
    -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="robots" content="{{ $robots }}">
    <link rel="canonical" href="{{ $canonical }}">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="{{ $ogTitle }}">
    <meta property="og:description" content="{{ $ogDescription }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:url" content="{{ $ogUrl }}">

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="{{ $twitterCard }}">
    <meta name="twitter:title" content="{{ $twitterTitle }}">
    <meta name="twitter:description" content="{{ $twitterDescription }}">
    <meta name="twitter:image" content="{{ $twitterImage }}">

    <!-- Schema Markup -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "{{ $schemaType }}",
            "name": "{{ $schemaName }}",
            "description": "{{ $schemaDescription }}",
            "url": "{{ $schemaUrl }}"
    }
    </script>
