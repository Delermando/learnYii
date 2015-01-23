<h1>Nueva Tarea</h1>
<?php $form = $this->beginWidget('CActiveForm'); ?>
<div>
    <?php echo $form->labelEx($model, 'nome');?>
    <?php echo $form->textField($model, 'nome');?>
    <?php echo $form->error($model, 'nome');?>
</div>
<div>
    <?php echo $form->labelEx($model, 'description');?>
    <?php echo $form->textField($model, 'description');?>
    <?php echo $form->error($model, 'description');?>
</div>
<?php echo CHtml::submitButton('Crear'); ?>
<?php $this->endWidget(); ?>