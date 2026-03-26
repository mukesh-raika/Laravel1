<div>
    <h1>Login</h1>

    <form action="login" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter name">
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password">
        <br>
        <br>
            <button>Login</button>
    </form>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
