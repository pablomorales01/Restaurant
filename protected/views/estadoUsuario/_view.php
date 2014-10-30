<?php
/* @var $this EstadoUsuarioController */
/* @var $data EstadoUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ESTADO_ID), array('view', 'id'=>$data->ESTADO_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADONOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADONOMBRE); ?>
	<br />


</div>