<?php

namespace devleaks\weather;

use yii\web\AssetBundle;

/**
 * @author Pierre M <devleaks.be@gmail.com>
 * @since 1.0
 */
class WeatherDevleaksImageAsset extends AssetBundle
{
    public $sourcePath = '@vendor/devleaks/yii2-weather';

    public $css = [
        'images',
    ];
}

