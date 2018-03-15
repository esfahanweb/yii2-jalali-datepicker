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
    /*
    public $sourcePath = '@vendor/simacms/yii2-jalali-datepicker/assets';
    public $css = [
        'css/persianDatepicker-default.css',
    ];
    public $js = [
        'js/persianDatepicker.min.js',
    ];
     * 
     */
    /*
    public $sourcePath = '@bower/persian-datepicker/dist';
    public $css = [
    ];
    public $js = [
        'js/persian-datepicker-0.4.5.min.js',
    ];
    public $depends = [
        'simacms\jalalidatepicker\DateAsset',
    ];
     * 
     */
    public $sourcePath = '@bower/persian-datepicker/dist';
    public $css = [
        'css/persian-datepicker.min.css',
    ];
    public $js = [
        'js/persian-datepicker.min.js',
    ];
    public $depends = [
        'simacms\jalalidatepicker\DateAsset',
    ];
     
}
