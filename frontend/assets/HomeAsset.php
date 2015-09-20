<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/highlight.css',
        'css/bootstrap-switch.css',
        'css/bootstrap-editable.css',
        'js/Page-Element-Loader/jquery.loader.min.css',
    ];
    public $js = [
        'js/Page-Element-Loader/jquery.loader.min.js',
        'js/common.js',
        'js/changePassword.js',
        'js/dashboard.js',
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
