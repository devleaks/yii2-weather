<?php

namespace devleaks\weather;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class WeatherAsset extends AssetBundle
{
    public $sourcePath = '@vendor/devleaks/weather';

    public $css = [
        'css/weather.css',
		'http://fonts.googleapis.com/css?family=Open+Sans:600,400',
    ];
		
    public $js = [
        'js/weather.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

