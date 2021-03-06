<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2tooltipster;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class yii2tooltipsterAsset extends AssetBundle
{
    public $sourcePath = '@bower/tooltipster/dist';
    
    public $css = array(
        'css/tooltipster.bundle.min.css',
    );
    
    public $js = array(
        'js/tooltipster.bundle.min.js'
    );
    
    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
