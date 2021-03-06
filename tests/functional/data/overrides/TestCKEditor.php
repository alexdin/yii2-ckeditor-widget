<?php
/**
 *
 * TestCKEditor.php
 *
 * Date: 02/03/15
 * Time: 12:25
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.alexdin.us/
 */

namespace tests\data\overrides;


use alexdin\ckeditor\CKEditor;
use yii\web\View;
use yii\helpers\Json;

class TestCKEditor extends CKEditor
{
    /**
     * Registers CKEditor plugin
     */
    protected function registerPlugin()
    {
        $view = $this->getView();

        TestCKEditorWidgetAsset::register($view);

        $id = $this->options['id'];

        $options = $this->clientOptions !== false && !empty($this->clientOptions)
            ? Json::encode($this->clientOptions)
            : '{}';

        $js[] = "CKEDITOR.replace('$id', $options);";
        $js[] = "alexdin.ckEditorWidget.registerOnChangeHandler('$id');";

        if (isset($this->clientOptions['filebrowserUploadUrl'])) {
            $js[] = "alexdin.ckEditorWidget.registerCsrfImageUploadHandler();";
        }

        $view->registerJs(implode("\n", $js), View::POS_READY, 'test-ckeditor-js');
    }
}
