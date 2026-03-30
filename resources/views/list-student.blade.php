<div>
    <h1>Student List </h1>
   <table border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Created</td>
        <td>Opration</td>
    </tr>
    @foreach($Students as $student)
    <tr>
        <td>{{$student->name}}</td> 
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>{{$student->created_at}}</td>
       <td> 
         <a href="{{ url('delete/'.$student->id) }}">Delete</a>
         <a href="{{ url('edit/'.$student->id) }}">Edit</a>
       </td>

    </tr>
    @endforeach
   </table>
</div>
