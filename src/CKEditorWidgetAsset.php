<?php
/**
 * @copyright Copyright (c) 2013-2016 alexdin! Consulting Group LLC
 * @link http://alexdin.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace alexdin\ckeditor;

use yii\web\AssetBundle;

/**
 * CKEditorWidgetAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.alexdin.us/
 * @package alexdin\ckeditor
 */
class CKEditorWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/alexdin/yii2-ckeditor-widget/src/assets/';

    public $depends = [
        'alexdin\ckeditor\CKEditorAsset'
    ];

    public $js = [
        'alexdin-ckeditor.widget.js'
    ];
}
