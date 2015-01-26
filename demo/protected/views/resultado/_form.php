<?php
/* @var $this ResultadoController */
/* @var $model Resultado */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'resultado-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'psicologico'); ?>
		<?php echo $form->textField($model,'psicologico'); ?>
		<?php echo $form->error($model,'psicologico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tecnica'); ?>
		<?php echo $form->textField($model,'tecnica'); ?>
		<?php echo $form->error($model,'tecnica'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'entrevista'); ?>
		<?php echo $form->textField($model,'entrevista'); ?>
		<?php echo $form->error($model,'entrevista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
		<?php echo $form->error($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->