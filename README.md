# yii2-bootstrap-filestyle-asset

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xutl/yii2-bootstrap-filestyle-asset
```

or add

```
"xutl/yii2-bootstrap-filestyle-asset": "~1.0.0"
```

to the require section of your `composer.json` file.

Usage
-----

```php
use xutl\bootstrap\filestyle\FilestyleAsset;
FilestyleAsset::register($this);

echo $form->field($model, 'file')->fileInput(['class'=>'filestyle','data'=>['buttonText'=>Yii::t('app','Choose file')]]);
```