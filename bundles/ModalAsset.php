<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  suxiaolin\metronic\bundles;

use yii\web\AssetBundle;

/**
 * SpinnerAsset for spinner widget.
 */
class ModalAsset extends AssetBundle
{
    public $sourcePath = '@suxiaolin/metronic/assets';
    public $js = [
        'global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js',
        'global/plugins/bootstrap-modal/js/bootstrap-modal.js',
    ];

    public  $css = [
        'global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css',
        'global/plugins/bootstrap-modal/css/bootstrap-modal.css',
    ];

    public $depends = [
        'suxiaolin\metronic\bundles\CoreAsset',
    ];
}
