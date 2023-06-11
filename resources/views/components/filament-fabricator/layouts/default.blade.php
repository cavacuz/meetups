@props(['page'])
<html lang="pt">
<head>
    <x-meta />
    <title> {{  $page->title }} </title>
    <link rel="icon" href="https://fav.farm/🇵🇹"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <x-ui.header />
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    <x-ui.footer />
    <x-plausible-analytics />
</body>
</html>
