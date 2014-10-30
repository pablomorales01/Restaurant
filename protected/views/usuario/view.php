<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->USU_ID,
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Create Usuario', 'url'=>array('create')),
	array('label'=>'Update Usuario', 'url'=>array('update', 'id'=>$model->USU_ID)),
	array('label'=>'Delete Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USU_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>View Usuario #<?php echo $model->USU_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USU_ID',
		'RESTO_ID',
		'ROL_ID',
		'USUPASSWORD',
		'USUCREATE',
		'USUNOMBRES',
		'USUAPELLIDOS',
		'USURUT',
		'USUTELEFONO',
		'USUESTADO',
	),
)); ?>
