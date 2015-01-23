<h1>Listado de tarefas</h1>
<?php echo CHtml::link('create', array('add'))?>
<table >
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Decription</th>
        <th>Ver</th>
        <th>Editar</th>
    </tr>
    <?php foreach ($tareas as $t){?>
        <tr>
            <td><?php echo $t->id; ?></td>
            <td><?php echo $t->nome; ?></td>
            <td><?php echo $t->description; ?></td>
            <td><?php echo CHtml::link('Ver', array('view', 'id'=>$t->id)) ?></td>
            <td><?php echo CHtml::link('Editar', array('edit', 'id'=>$t->id)) ?></td>
            <td><?php echo CHtml::link('Apagar', array('delete', 'id'=>$t->id),array('confirm'=>'Seguro lo borro?')); ?></td>
        </tr>
    <?php }?>
</table>