<?php
/* @var $this EstadoUsuarioController */
/* @var $model EstadoUsuario */

$this->breadcrumbs=array(
	'Estado Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EstadoUsuario', 'url'=>array('index')),
	array('label'=>'Manage EstadoUsuario', 'url'=>array('admin')),
);
?>

<h1>Create EstadoUsuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>