<?php
/* @var $this EstadoUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estado Usuarios',
);

$this->menu=array(
	array('label'=>'Create EstadoUsuario', 'url'=>array('create')),
	array('label'=>'Manage EstadoUsuario', 'url'=>array('admin')),
);
?>

<h1>Estado Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
