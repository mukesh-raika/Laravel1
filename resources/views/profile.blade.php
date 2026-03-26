<div>
    <h1>Profile Page</h1> 
    @if(session('user'))
    <h1>Welcome, {{session('user')}}</h1>
    @else
    <h1>No User Found In session</h1>
    @endif

    <a href="logout">Logout</a>
    <!-- An unexamined life is not worth living. - Socrates -->
</div>
