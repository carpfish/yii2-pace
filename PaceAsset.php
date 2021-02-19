<?php
/**
 * Created by PhpStorm.
 * User: Carpfish - http://fishome.org
 * Date: 02.19.2021
 * Time: 11:15
 */

namespace phpnt\pace;

use yii\web\AssetBundle;

/**
 * Class AssetBundle
 */
class PaceAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/pace';

    /**
     * @inherit
     */ 
    public $css = [

    ];

    /**
     * @inherit
     */
    public $js = [
        'pace.min.js',
    ];

    public $depends = [
        'phpnt\pace\PaceCssAsset',
    ];

    public function init()
    {
        parent::init();
    }
}
