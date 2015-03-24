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
<?= \devleaks\weather\AutoloadExample::widget(); ?>```