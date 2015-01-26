<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo 'Experiencias'; ?>:</b>
        
        <?php 
            echo CHtml::encode($data->experienciasCount); 
        
//            foreach ($data->experiencias as $exp){
//                echo $exp->empresa.' - ';
//            };
//        ?>
	<br />
        <b><?php echo 'Vagas'; ?>:</b>
        
        <?php 
            foreach ($data->vagas as $v){
                echo $v->nome.' - ';
            };
//        ?>
	<br />
	<b><?php echo 'Avaliacao'; ?>:</b>
        <?php 
                echo $data->avaliacao?$data->avaliacao->total:'0';
        ?>
	<br />
	
        <b><?php echo CHtml::encode($data->getAttributeLabel('identificacao')); ?>:</b>
	<?php echo CHtml::encode($data->identificacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idCidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade->nome); ?>
	<br />


</div>