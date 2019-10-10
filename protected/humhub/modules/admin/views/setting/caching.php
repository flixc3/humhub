<?php

use humhub\modules\admin\models\forms\CacheSettingsForm;
use humhub\widgets\Button;
use yii\widgets\ActiveForm;

/* @var $cacheTypes [] */
/* @var $model CacheSettingsForm */

?>

<?php $this->beginContent('@admin/views/setting/_advancedLayout.php') ?>

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'type')->dropDownList($cacheTypes, ['readonly' => Yii::$app->settings->isFixed('cache.class')]) ?>


        <?= $form->field($model, 'expireTime')->textInput(['readonly' => Yii::$app->settings->isFixed('cache.expireTime')]) ?>
        <?= $form->field($model, 'reloadableScripts')->textarea() ?>


        <hr>
        <?= Button::primary(Yii::t('AdminModule.settings', 'Save & Flush Caches'))->submit() ?>

    <?php ActiveForm::end(); ?>

<?php $this->endContent(); ?>
