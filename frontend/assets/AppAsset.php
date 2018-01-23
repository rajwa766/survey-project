<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/site.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css',
        'js/css/theme.css',
    ];
    public $js = [
        'js/custom.js',
        'js/src/jsgrid.core.js',
        'js/src/jsgrid.load-indicator.js',
        'js/src/jsgrid.load-strategies.js',
        'js/src/jsgrid.sort-strategies.js',
        'js/src/jsgrid.validation.js',
        'js/src/jsgrid.field.js',
        'js/src/fields/jsgrid.field.text.js',
        'js/src/fields/jsgrid.field.number.js',
        'js/src/fields/jsgrid.field.select.js',
        'js/src/fields/jsgrid.field.checkbox.js',
        'js/src/fields/jsgrid.field.control.js',
        'js/db_items.js',
        'js/db_wpo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
