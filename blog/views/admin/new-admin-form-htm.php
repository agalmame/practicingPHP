<?php 
if(!isset($adminFormMessage)){
    $adminFormMessage = "";
}

return "
<form method='post' action='admin.php?page=users' >
    <fieldset>
        <legend>Create new admin</legend>
        <LABEL>email</email>
        <input type='email' name='email' required/>
        <label>password</label>
        <input type='password' name='password' required/>
        <label>confirm password</label>
        <input type='password' name='confirmPassword'/>
        <input type='submit' name='new-admin'/>
    </fieldset>
    <p id='admin-form-message'>$adminFormMessage</p>
</form>
";
?>