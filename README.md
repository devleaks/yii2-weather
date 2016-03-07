Weather Widget
==============
Widget displays weather information for current location if allowed.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist devleaks/yii2-weather "*"
```

or add

```
"devleaks/yii2-weather": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<div id="weather"></div>

<?= Weather::widget([
		'id' => 'weather',
		'pluginOptions' => [
			'celsius' => true,
			'imgPath' => '/gipadmin/images/weather-widget/',
			'key' => Yii::$app->params['FORECAST_APIKEY'],
			'lat' => Yii::$app->params['FORECAST_DEFAULT_LAT'],
			'lon' => Yii::$app->params['FORECAST_DEFAULT_LON'],
		]])
?>
```

and add your parameters in params.php:

```
return [
	...
	/* Forecast.io */
	'FORECAST_APIKEY' => '*** YOUR KEY HERE ***',
	'FORECAST_DEFAULT_LAT' => 50.8449933,
	'FORECAST_DEFAULT_LON' =>  4.3499778,
	...
];

```

See Also
--------

https://github.com/BlueBiteLLC/service-weather-js