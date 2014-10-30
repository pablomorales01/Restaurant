<?php
/* @var $this EstadoUsuarioController */
/* @var $model EstadoUsuario */

$this->breadcrumbs=array(
	'Estado Usuarios'=>array('index'),
	$model->ESTADO_ID,
);

$this->menu=array(
	array('label'=>'List EstadoUsuario', 'url'=>array('index')),
	array('label'=>'Create EstadoUsuario', 'url'=>array('create')),
	array('label'=>'Update EstadoUsuario', 'url'=>array('update', 'id'=>$model->ESTADO_ID)),
	array('label'=>'Delete EstadoUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ESTADO_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EstadoUsuario', 'url'=>array('admin')),
);
?>

<h1>View EstadoUsuario #<?php echo $model->ESTADO_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ESTADO_ID',
		'ESTADONOMBRE',
	),
)); ?>
