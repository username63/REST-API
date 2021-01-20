<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}



#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
<a href="knigi_create">Добавить запись</a><br/><br/>
<?php echo e(session('msg')); ?>

<br/>
<table id="customers">
    <tr>
        <td>Id</td>
        <td>Название Книги</td>
        <td>Имя Автора</td>
        <td>Дата создания</td>
        <td>Действие</td>
    </tr>
        <?php $__currentLoopData = $knigiArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $knigi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($knigi->id); ?></td>
        <td><?php echo e($knigi->kniga_name); ?></td>
        <td><?php echo e($knigi->avtor_name); ?></td>
        <td><?php echo e($knigi->created_at); ?></td>
        <td>
        <a href="knigi_delete/<?php echo e($knigi->id); ?>">Удалить</a>
        <a href="knigi_edit/<?php echo e($knigi->id); ?>">Редактировать</a>        
        </td>
    </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH D:\Progs\OpenServer\OpenServer\example-app\resources\views/knigi_show.blade.php ENDPATH**/ ?>