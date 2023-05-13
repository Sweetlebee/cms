<?php

use App\Services\SettingsService;
use Illuminate\Support\Facades\Pipeline;

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}

if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $_SERVER["REMOTE_ADDR"] = $_SERVER['HTTP_X_FORWARDED_FOR'];
}

if(!function_exists('getPredominantImageColor')) {
    /**
     * Gets the most predominant color in an image.
     */
    function getPredominantImageColor(string $imageUrl, string $default = '#000'): string {
        try {
            $gdImage = imagecreatefromstring(file_get_contents($imageUrl));

            if(!$gdImage) return $default;

            $shortendImage = imagecreatetruecolor(1, 1);

            imagecopyresampled($shortendImage, $gdImage, 0, 0, 0, 0, 1, 1, imagesx($gdImage), imagesy($gdImage));

            $color = dechex(imagecolorat($shortendImage, 0, 0));

            return "#$color";
        } catch (\Throwable $ignored) {
            return $default;
        }
    }
}

if(!function_exists('isDarkColor')) {
    /**
     * Determines whether a color is dark or not.
     */
    function isDarkColor(string $hexColor): bool {
        $hexColor = str_replace('#', '', $hexColor);

        $c_r = hexdec(substr($hexColor, 0, 2));
        $c_g = hexdec(substr($hexColor, 2, 2));
        $c_b = hexdec(substr($hexColor, 4, 2));

        $brightness = (($c_r * 299) + ($c_g * 587) + ($c_b * 114)) / 1000;

        return $brightness <= 155;
    }
}

if(!function_exists('getSetting')) {
    /**
     * Gets a setting from the database (**cms_settings** table).
     */
    function getSetting(string $key, ?string $defaultValue = null): string|int {
        return app(SettingsService::class)->get($key, $defaultValue);
    }
}

if(!function_exists('renderBBCodeText')) {
    /**
     * Render BBCode text to HTML.
     */
    function renderBBCodeText(string $content): string {
        return Pipeline::send($content)
            ->through([
                fn (string $content, \Closure $next) => $next(str_replace(['[b]', '[/b]'], ['<b>', '</b>'], $content)),
                fn (string $content, \Closure $next) => $next(str_replace(['[i]', '[/i]'], ['<i>', '</i>'], $content)),
                fn (string $content, \Closure $next) => $next(str_replace(['[u]', '[/u]'], ['<u>', '</u>'], $content)),
                fn (string $content, \Closure $next) => $next(str_replace(['[s]', '[/s]'], ['<s>', '</s>'], $content)),
                fn (string $content, \Closure $next) => $next(str_replace(['[h]', '[/h]'], ['<span class="text-xs rounded text-white px-1" style="background-color: #0284c7">', '</span>'], $content)),
            ])->then(fn (string $content) => $content);
    }
}
