<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Usuario', 'url'=>array('index')),
	array('label'=>'Manage Usuario', 'url'=>array('admin')),
);
?>

<h1>Crear Usuario</h1>


<?php $this->renderPartial('_form', array('model'=>$model, 'tipos'=>$tipos, 'restaurantes'=>$restaurantes)); ?>