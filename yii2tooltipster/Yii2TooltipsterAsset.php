<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace Yii2Tooltipster;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Yii2TooltipsterAsset extends AssetBundle
{
    public $basePath = '@wwwroot';
    public $baseUrl = '@www';
    public $css = array(
        'css/tooltipster.css',
        'css/themes/tooltipster-light.css'
    );
    public $js = array(
        'js/jquery.tooltipster.min.js'
    );
    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
