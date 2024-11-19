<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
     <h1>Login</h1>
     <form action="login" method="post">
        @csrf
        <input type="text" name="user" id="user" placeholder="Enter name">
        <br>
        <input type="password" name="userPassword" id="userPassword" placeholder="Enter Password">
        <br>
        <button>Login</button>
     </form>
</div>
