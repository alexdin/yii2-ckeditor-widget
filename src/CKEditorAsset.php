<?php
/**
 * @copyright Copyright (c) 2013-16 alexdin! Consulting Group LLC
 * @link http://alexdin.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace alexdin\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.alexdin.us/
 * @package alexdin\ckeditor
 */
class CKEditorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/alexdin/ckeditor-releases';
    public $js = [
        'ckeditor.js',
        'adapters/jquery.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];
}
