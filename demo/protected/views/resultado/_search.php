<?php
/* @var $this ResultadoController */
/* @var $model Resultado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'psicologico'); ?>
		<?php echo $form->textField($model,'psicologico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tecnica'); ?>
		<?php echo $form->textField($model,'tecnica'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'entrevista'); ?>
		<?php echo $form->textField($model,'entrevista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total'); ?>
		<?php echo $form->textField($model,'total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->