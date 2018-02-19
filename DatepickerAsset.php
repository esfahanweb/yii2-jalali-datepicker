<?php
/**
 * DatepickerAsset.php
 *
 * @copyright Copyright Moslem Mobarakeh, https://github.com/simacms, 2016
 * @author Moslem Mobarakeh
 * @package simacms/yii2-jalali-datepicker
 * @license MIT
 */

namespace simacms\jalalidatepicker;

use yii\web\AssetBundle;

class DatepickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/persian-datepicker/dist';
    public $css = [
    ];
    public $js = [
        'js/persian-datepicker-0.4.5.min.js',
    ];
    public $depends = [
        'simacms\jalalidatepicker\DateAsset',
    ];
}
