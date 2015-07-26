<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace suxiaolin\metronic\bundles;

use yii\web\AssetBundle;

class GridViewAsset extends AssetBundle {

    /**
     * @var string source path
     */
    public $sourcePath = '@suxiaolin/metronic/assets';

    /**
     * @var array CSS
     */
    public $css = [
        'global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css',
    ];

}
