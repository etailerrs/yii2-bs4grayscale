<?php
/**
 * @link https://www.etailer.rs
 * @copyright Etailer (c) 2019
 * @license MIT
 */

namespace etailerrs\bs4grayscale;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by etailerrs/bs4grayscale.
 *
 * @author Etailerrs <bitbucket@etailer.rs>
 * 
 */
class EtailerrsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/etailerrs/bs4grayscale/src/bs_temp/';
    public $basePath = '@vendor/etailerrs/bs4grayscale/src/bs_temp/';
    public $baseLayout = '@vendor/etailerrs/bs4grayscale/src/views/layouts/';

    public $css = [
        'vendor/bootstrap/css/bootstrap.min.css',
        'vendor/fontawesome-free/css/all.min.css',
        'https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i',
        'https://fonts.googleapis.com/css?family=Varela+Round',
        'css/grayscale.min.css'
    ];
    public $js = [
        'vendor/jquery/jquery.min.js',
        'vendor/bootstrap/js/bootstrap.bundle.min.js',
        'vendor/jquery-easing/jquery.easing.min.js',
        'js/grayscale.js'
    ];
    public $depends = [
        'yii\web\YiiAsset'
    ];
}
