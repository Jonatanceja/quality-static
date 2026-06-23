<?php

use Illuminate\Container\Container;
use TightenCo\Jigsaw\Events\EventBus;
use TightenCo\Jigsaw\Jigsaw;

/** @var Container $container */
/** @var EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

/*
 * Generate sitemap.xml from the built pages so it always stays in sync.
 */
$events->afterBuild(function (Jigsaw $jigsaw) {
    $baseUrl = rtrim($jigsaw->getConfig('baseUrl') ?: '', '/');

    $urls = collect($jigsaw->getOutputPaths())
        ->reject(fn ($path) => str_starts_with($path, '/assets/'))   // static assets
        ->reject(fn ($path) => $path === '/hot')                     // vite dev artifact
        ->reject(fn ($path) => str_contains($path, '404'))
        ->filter(fn ($path) => ! preg_match('#\.[a-z0-9]+$#i', $path)) // keep pretty page routes only
        ->map(fn ($path) => $path === '' ? '/' : $path)
        ->push('/')                                                  // home is emitted as /index.html
        ->unique()
        ->sort()
        ->values();

    $priority = function (string $loc): string {
        if ($loc === '/') {
            return '1.0';
        }
        if (str_starts_with($loc, '/city-') || $loc === '/sample-report') {
            return '0.6';
        }
        return '0.8';
    };

    $changefreq = function (string $loc): string {
        if ($loc === '/' || $loc === '/reviews') {
            return 'weekly';
        }
        return 'monthly';
    };

    // Resolve the source file behind each pretty URL to use its real mtime as <lastmod>.
    $sourcePath = $jigsaw->getSourcePath();
    $lastmod = function (string $loc) use ($sourcePath): string {
        $slug = $loc === '/' ? 'index' : ltrim($loc, '/');
        $candidates = ["{$slug}.blade.php", "{$slug}.md", "{$slug}/index.html", "{$slug}.html"];

        foreach ($candidates as $candidate) {
            $file = "{$sourcePath}/{$candidate}";
            if (is_file($file)) {
                return date('Y-m-d', filemtime($file));
            }
        }

        return date('Y-m-d');
    };

    $body = $urls->map(function ($loc) use ($baseUrl, $priority, $changefreq, $lastmod) {
        $url = $loc === '/' ? $baseUrl . '/' : $baseUrl . $loc;

        return "  <url>"
            . "<loc>{$url}</loc>"
            . "<lastmod>{$lastmod($loc)}</lastmod>"
            . "<changefreq>{$changefreq($loc)}</changefreq>"
            . "<priority>{$priority($loc)}</priority>"
            . "</url>";
    })->implode("\n");

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n"
        . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n"
        . $body . "\n"
        . '</urlset>' . "\n";

    $jigsaw->writeOutputFile('sitemap.xml', $xml);
});
