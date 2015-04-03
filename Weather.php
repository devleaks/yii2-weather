<?php

namespace devleaks\weather;

use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;

/**
 * Weather js+css app from http://codepen.io/Enzo_Eghermanne/details/NPByRG
 */

/**
 * Asset Widget based to load Packery JavaScript library {@link http://packery.metafizzy.co)
 * @package devleaks\metafizzy
 *
 * @author Pierre M <devleaks.be@gmail.com>
 */
class Weather extends Widget {
	const UNIT_FARENHEIT = 'f';
	const UNIT_CELSIUS = 'c';
	
	const DEFAULT_CITY = 'Brussels';

    /**
     * @var array the HTML attributes for the div tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array Plugin options
     */
    public $pluginOptions = [];

    /**
     * Initializes the object.
     * This method is invoked at the end of the constructor after the object is initialized with the
     * given configuration.
     */
    public function init()
    {
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        if (!isset($this->options['city'])) {
            $this->options['city'] = self::DEFAULT_CITY;
        }
        if (!isset($this->options['unit'])) {
            $this->options['unit'] = self::UNIT_CELSIUS;
        }
        parent::init();
    }

    /**
     * Render chosen select
     * @return string|void
     */
    public function run()
    {
        $this->registerAssets();
		echo $this->renderFile('@vendor/devleaks/yii2-weather/views/weather.html');
    }

    /**
     * Register client assets
     */
    protected function registerAssets()
    {
        $view = $this->getView();
        WeatherAsset::register($view);
		$js = [];
        $js[] = 'selectedCity = "'.$this->options['city'] . '";';
        $js[] = 'unit = "'.$this->options['unit'] . '";';
        $view->registerJs(implode("\n", $js), $view::POS_END);
    }

    /**
     * Return plugin options in json format
     * @return string
     */
    public function getPluginOptions()
    {
        return Json::encode($this->pluginOptions);
    }
}