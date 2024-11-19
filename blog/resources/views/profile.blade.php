<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
     <h1>Profile Page</h1>
     <!-- <h1>{{session("user")}}</h1> -->

     @if(session('user'))
        <h1>Welcome, {{session('user')}}</h1>
     @else
        <h1>No user Found in session <a href="login">Login</a></h1>
     @endif

     <a href="logout">Logout</a>
</div>
