# yii2-bootstrap-filestyle-asset


[![Latest Stable Version](https://poser.pugx.org/xutl/yii2-bootstrap-filestyle-asset/v/stable.png)](https://packagist.org/packages/xutl/yii2-bootstrap-filestyle-asset)
[![Total Downloads](https://poser.pugx.org/xutl/yii2-bootstrap-filestyle-asset/downloads.png)](https://packagist.org/packages/xutl/yii2-bootstrap-filestyle-asset)
[![Dependency Status](https://www.versioneye.com/php/xutl:yii2-bootstrap-filestyle-asset/dev-master/badge.png)](https://www.versioneye.com/php/xutl:yii2-bootstrap-filestyle-asset/dev-master)
[![License](https://poser.pugx.org/xutl/yii2-bootstrap-filestyle-asset/license.svg)](https://packagist.org/packages/xutl/yii2-bootstrap-filestyle-asset)


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

## License

This is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md)
for details.