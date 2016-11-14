<?php
/**
 * @copyright Copyright (c) 2013-2016 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace alexdin\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package alexdin\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/2amigos/yii2-ckeditor-widget/src/assets/';

    public $depends = [
        'alexdin\ckeditor\CKEditorAsset'
    ];

    public $js = [
        'alexdin-ckeditor.widget.js'
    ];
}
