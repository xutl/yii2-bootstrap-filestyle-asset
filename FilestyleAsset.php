<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace xutl\bootstrapfilestyle;

use yii\web\AssetBundle;

class FilestyleAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@vendor/xutl/yii2-bootstrap-filestyle-asset/assets/src';

    /**
     * @inherit
     */
    public $js = [
        'bootstrap-filestyle.min.js',
    ];
}