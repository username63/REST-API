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
{{session('msg')}}
<br/>
<table id="customers">
    <tr>
        <td>Id</td>
        <td>Название Книги</td>
        <td>Имя Автора</td>
        <td>Дата создания</td>
        <td>Действие</td>
    </tr>
        @foreach($knigiArr as $knigi)
    <tr>
        <td>{{$knigi->id}}</td>
        <td>{{$knigi->kniga_name}}</td>
        <td>{{$knigi->avtor_name}}</td>
        <td>{{$knigi->created_at}}</td>
        <td>
        <a href="knigi_delete/{{$knigi->id}}">Удалить</a>
        <a href="knigi_edit/{{$knigi->id}}">Редактировать</a>        
        </td>
    </tr>
        @endforeach
</table>