<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */

if($tipos == null)
{
	echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold
	('Sin roles de usuarios ') . 'Antes de ingresar un nuevo usuario al sistema, 
	por favor ingrese un rol ' . BsHtml::alertLink(' AQUÍ.', array(
    'url'=>array('TipoRol/create')
)));


}

else 
{
	?>


<?php
$form = $this->beginWidget('bootstrap.widgets.BsActiveForm', array(
    'layout' => BsHtml::FORM_LAYOUT_HORIZONTAL,
    'enableAjaxValidation' => true,
    'id' => 'user_form_horizontal',
    'htmlOptions' => array(
        'class' => 'bs-example'
    )
));
?>

	<p class="note">Campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="row">
		<?php		
		 echo $form->dropDownListControlGroup($model, 'ROL_ID',CHtml::listData($tipos, 'ROL_ID', 'ROLNOMBRE'));				
		?>
		

	</div>
	<div class="row">
		<?php	
		if($restaurantes == null) 
	echo BsHtml::alert(BsHtml::ALERT_COLOR_DANGER, BsHtml::bold('No existen restaurantes para asignar. ') . 
		'Para crear uno por favor haga click ' . BsHtml::alertLink('AQUÍ', array('url' => '../restaurant/create')));
		else echo $form->dropDownListControlGroup($model, 'RESTO_ID',CHtml::listData($restaurantes, 'RESTO_ID', 'RESTO_NOMBRE'
		));				
		?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'USUPASSWORD'); ?>
		<?php echo $form->textField($model,'USUPASSWORD',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USUPASSWORD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUCREATE'); ?>
		<?php echo $form->textField($model,'USUCREATE'); ?>
		<?php echo $form->error($model,'USUCREATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUNOMBRES'); ?>
		<?php echo $form->textField($model,'USUNOMBRES',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUNOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUAPELLIDOS'); ?>
		<?php echo $form->textField($model,'USUAPELLIDOS',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'USUAPELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USURUT'); ?>
		<?php echo $form->textField($model,'USURUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'USURUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUTELEFONO'); ?>
		<?php echo $form->textField($model,'USUTELEFONO'); ?>
		<?php echo $form->error($model,'USUTELEFONO'); ?>
	</div>

	<div class="row">
		<?php
echo $form->dropDownListControlGroup($model, 'USUESTADO', array(
    'Habilitado',
    'No habilitado'
));
?>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php } ?>