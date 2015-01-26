<?php
/* @var $this ExperienciaController */
/* @var $data Experiencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inicio')); ?>:</b>
	<?php echo CHtml::encode($data->inicio); ?>
	<br />
        
	<b><?php echo 'Usuario'; ?>:</b>
	<?php echo CHtml::encode($data->usuarios->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fim')); ?>:</b>
	<?php echo CHtml::encode($data->fim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>