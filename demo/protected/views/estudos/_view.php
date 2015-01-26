<?php
/* @var $this EstudosController */
/* @var $data Estudos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instituicao')); ?>:</b>
	<?php echo CHtml::encode($data->instituicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anoGraducao')); ?>:</b>
	<?php echo CHtml::encode($data->anoGraducao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titulo')); ?>:</b>
	<?php echo CHtml::encode($data->titulo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->idUsuario); ?>
	<br />


</div>