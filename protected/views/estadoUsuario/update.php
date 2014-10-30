<?php
/* @var $this EstadoUsuarioController */
/* @var $model EstadoUsuario */

$this->breadcrumbs=array(
	'Estado Usuarios'=>array('index'),
	$model->ESTADO_ID=>array('view','id'=>$model->ESTADO_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List EstadoUsuario', 'url'=>array('index')),
	array('label'=>'Create EstadoUsuario', 'url'=>array('create')),
	array('label'=>'View EstadoUsuario', 'url'=>array('view', 'id'=>$model->ESTADO_ID)),
	array('label'=>'Manage EstadoUsuario', 'url'=>array('admin')),
);
?>

<h1>Update EstadoUsuario <?php echo $model->ESTADO_ID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>