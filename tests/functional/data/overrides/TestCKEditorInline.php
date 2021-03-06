<?php

namespace tests\data\overrides;


use alexdin\ckeditor\CKEditorInline;
use yii\helpers\Json;
use yii\web\View;

class TestCKEditorInline extends CKEditorInline
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
