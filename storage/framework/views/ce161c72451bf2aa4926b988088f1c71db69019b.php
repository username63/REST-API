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
<a href="knigi_show">Назад</a><br/><br/>
<form method="post" action="<?php echo e(route('knigi.update', [$knigiArr->id])); ?>">
<?php echo csrf_field(); ?>
  <table id="customers">
    <tr>
      <td>Название книги</td>
      <td><input type="textname" name="kniga_name" required value="<?php echo e($knigiArr->kniga_name); ?>"></td>
    </tr>
    <tr>
      <td>ФИО автора</td>
      <td><input type="textname" name="avtor_name" required value="<?php echo e($knigiArr->avtor_name); ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="submit"></td>
    </tr>
</form><?php /**PATH D:\Progs\OpenServer\OpenServer\example-app\resources\views/knigi_edit.blade.php ENDPATH**/ ?>