<?php
/**
 * DateAsset.php
 *
 * @copyright Copyright Moslem Mobarakeh, https://github.com/simacms, 2016
 * @author Moslem Mobarakeh
 * @package simacms/yii2-jalali-datepicker
 * @license MIT
 */

namespace simacms\jalalidatepicker;

use yii\web\AssetBundle;

class DateAsset extends AssetBundle
{
    public $sourcePath = '@bower/persian-date/dist';
    public $js = [
        'persian-date.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
