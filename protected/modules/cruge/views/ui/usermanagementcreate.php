<h1><?php echo ucwords(CrugeTranslator::t("crear nuevo usuario"));?></h1>
<div class="form">
<?php
	/*
		$model:  es una instancia que implementa a ICrugeStoredUser
	*/
?>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'crugestoreduser-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
)); ?>
<div class="row form-group">

	<div class="col">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
	<div class="col">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
	<div class='col'>
		<?php echo $form->labelEx($usuario,'USUNOMBRES'); ?>
		<?php echo $form->textField($usuario,'USUNOMBRES'); ?>
		<?php echo $form->error($usuario,'USUNOMBRES'); ?>

	</div>
	<div class='col'>
		<?php echo $form->labelEx($usuario,'USUAPELLIDOS'); ?>
		<?php echo $form->textField($usuario,'USUAPELLIDOS'); ?>
		<?php echo $form->error($usuario,'USUAPELLIDOS'); ?>
	</div>
	<div class='col'>
		<?php echo $form->labelEx($usuario,'USURUT'); ?>
		<?php echo $form->textField($usuario,'USURUT'); ?>
		<?php echo $form->error($usuario,'USURUT'); ?>
	</div>
	<div class='col'>
		<?php echo $form->labelEx($usuario,'USUTELEFONO'); ?>
		<?php echo $form->textField($usuario,'USUTELEFONO'); ?>
		<?php echo $form->error($usuario,'USUTELEFONO'); ?>

	</div></div>
	<div class="col">
		<?php echo $form->labelEx($model,'newPassword'); ?>
		<?php echo $form->textField($model,'newPassword'); ?>
		<?php echo $form->error($model,'newPassword'); ?>
		
		<script>
			function fnSuccess(data){
				$('#CrugeStoredUser_newPassword').val(data);
			}
			function fnError(e){
				alert("error: "+e.responseText);
			}
		</script>
		<?php echo CHtml::ajaxbutton(
			CrugeTranslator::t("Generar una nueva clave")
			,Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
			,array('success'=>'js:fnSuccess','error'=>'js:fnError')
		); ?>
	</div>
<div class="row buttons">
	<?php Yii::app()->user->ui->tbutton("Crear Usuario"); ?>
</div>
<?php echo $form->errorSummary($model); ?>
<?php $this->endWidget(); ?>
</div>