<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace suxiaolin\metronic\bundles;

use yii\web\AssetBundle;

class FontAsset extends AssetBundle
{
    public $sourcePath = '@suxiaolin/metronic/assets';

    public $css = [
        'global/plugins/font-awesome/css/font-awesome.min.css',
    ];
}
