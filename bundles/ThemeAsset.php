<?php

/**
 * @link http://www.digitaldeals.cz/
 * @copyright Copyright (c) 2014 Digital Deals s.r.o. 
 * @license http://www.digitaldeals.cz/license/
 */

namespace suxiaolin\metronic\bundles;

use yii\web\AssetBundle;
use suxiaolin\metronic\Metronic;

class ThemeAsset extends AssetBundle {

    /**
     * @var string source assets path
     */
    public $sourcePath = '@suxiaolin/metronic/assets/admin/{version}';

    /**
     * @var array depended bundles
     */
    public $depends = [
        'suxiaolin\metronic\bundles\CoreAsset',
        'suxiaolin\metronic\bundles\StyleBasedAsset',
    ];

    /**
     * @var array css assets
     */
    public $css = [
        'css/layout.css',
        'css/themes/{theme}.css',
        'css/custom.css',
    ];

    /**
     * @var array js assets
     */
    public $js = [
        'scripts/layout.js',
        'scripts/quick-sidebar.js',
        'scripts/demo.js',
    ];

    /**
     * Inits bundle
     */
    public function init()
    {
        $this->_handleSourcePath();

        $this->_handleDynamicCss();

        return parent::init();
    }

    /**
     * Parses source path
     */
    private function _handleSourcePath()
    {
        Metronic::getComponent()->parseAssetsParams($this->sourcePath);
    }

    /**
     * Parses dynamic css
     */
    private function _handleDynamicCss()
    {
        array_walk($this->css, array(Metronic::getComponent(), 'parseAssetsParams'));
    }

}
