<h1>Listado de tarefas</h1>
<table >
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Decription</th>
        <th></th>
    </tr>
    <?php foreach ($tareas as $t){?>
        <tr>
            <td><?php echo $t->id; ?></td>
            <td><?php echo $t->nome; ?></td>
            <td><?php echo $t->description; ?></td>
            <td><?php echo CHtml::link('Ver', array('view', 'id'=>$t->id)) ?></td>
        </tr>
    <?php }?>
</table>