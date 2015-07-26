<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace suxiaolin\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class TagInputAsset extends AssetBundle {

    public $sourcePath = '@suxiaolin/metronic/assets';
    public $js = [
        'global/plugins/jquery-tags-input/jquery.tagsinput.min.js',
    ];
    public $css = [
        'global/plugins/jquery-tags-input/jquery.tagsinput.css',
    ];
    public $depends = [
        'suxiaolin\metronic\bundles\CoreAsset',
    ];

}