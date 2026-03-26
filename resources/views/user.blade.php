<div>
    <h1>Add New User</h1>

       @if(session('message'))
   <span class="success-message">{{session('message')}}</span>
   @endif

   @if(session('username'))
    <span class="success-message">{{session('username')}}</span>
    @endif

    <form action="add" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter User Name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter User Name">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter User phone">
        <br>
        <br>
        <button>Add New User</button>
    </form>
</div>

<style>
    .success-message{
        background-color: lightgreen;
        border-radius:2px 20px;
        margin-bottom:10px;
        display:inline-block;
    }
</style>

