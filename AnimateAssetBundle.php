<?php

namespace delocker\animate;

use yii\web\AssetBundle;

class AnimateAssetBundle extends AssetBundle
{
    public $sourcePath = '@vendor/delocker/yii2-animate.css';

    public $css = [
        'css/animate.min.css',
    ];
}