<?php

include 'User.php';

$user = new User();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $user->register();
}

?>



<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="email" name="email" placeholder="E-mail"><br>
    <input type="text" name="password" placeholder="Password"><br>
    <input type="text" name="confirmpassword" placeholder="Confrim Password"><br>
    <input type="date" name="birthdate" placeholder="Birth Date"><br>
    <select>
        <option value="choose">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <button type="submit" name="login">Login</button>
</form>