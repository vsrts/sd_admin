<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

?>

<div class="save-form">

    <?php $form = ActiveForm::begin([
        'action' => Url::to(['profile/save/?id=' . $point->id]),
    ]); ?>

    <?= $form->field($point, 'status') ?>
    <?= $form->field($point, 'phone') ?>
    <?= $form->field($point, 'second_phone') ?>
    <?= $form->field($point, 'time') ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Отмена', ['index'], ['class'=>'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>