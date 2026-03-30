<div>
    <h1>Student List </h1>
    <form action="search" method="get">
     <input type="text" placeholder="Search With Name" name="search" value="{{ $search ?? '' }}">
        <button>Search</button>
    </form>
    <form action="delete-multi" method="post">
      @csrf
      <button>Delete</button>

   <table border="1">
    <tr>
        <td>Section</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Created</td>
        <td>Opration</td>
    </tr>
    @foreach($Students as $student)
    <tr>
        <td><input type="checkbox" name="ids[]" value="{{$student->id}}"></td>
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
      </form>
      <br>
      <br>

   {{$Students->links( )}}
</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>
