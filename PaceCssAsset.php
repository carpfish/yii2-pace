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
class PaceCssAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@phpnt/pace';

    /**
     * @inherit
     */
    public $css = [
        'css/style.css'
    ];
}
