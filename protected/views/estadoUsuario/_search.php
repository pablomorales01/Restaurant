<?php
/* @var $this EstadoUsuarioController */
/* @var $model EstadoUsuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ESTADO_ID'); ?>
		<?php echo $form->textField($model,'ESTADO_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADONOMBRE'); ?>
		<?php echo $form->textField($model,'ESTADONOMBRE',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->