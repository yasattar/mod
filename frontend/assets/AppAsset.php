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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "css/bootstrap.css",
        "css/owl.theme.css",
        "css/owl.carousel.css",
        "css/style-col2.css",
        "css/animate.css" ,
        "css/ionicons.css",
        "css/nivo-lightbox.css" ,
       "css/nivo-themes/default/default.css"
        
    ];
    public $js = [
        "js/jquery-2.1.1.min.js",
        "js/retina.min.js",
        "js/owl.carousel.min.js",
        "js/wow.js",
        "js/jquery.nav.js",
        "js/jquery.scrollTo.min.js",
        "js/nivo-lightbox.min.js",
        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
