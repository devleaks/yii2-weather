<?php

namespace devleaks\weather;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class WeatherAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower';

    public $css = [
        'weather-widget/dist/weather-widget.css',
    ];

    public $js = [
		'geolocate-lite/geo-lite.js',
        'weather-widget/dist/weather-widget.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

