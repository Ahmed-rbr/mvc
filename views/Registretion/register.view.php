<?php
require basePath( "views/partes/head.php");
require basePath( "views/partes/nave.php");

?>
<form action="/mvc/register" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username:</label>
    <input type="text" name='username'    value="<?= htmlspecialchars($_POST['username'] ?? '') ?>" 
 class="form-control <?= isset($errs['username']) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  

     <?php
     
   showError($errs,'username');
   
   ?>
      
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email"   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" 
 class="form-control <?= isset($errs['email']) ? 'is-invalid' : '' ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   <?php
   showError($errs,'email');
   
   ?>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pwd"  class="form-control <?= isset($errs['pwd']) ? 'is-invalid' : '' ?>" id="exampleInputPassword1">
  </div>
  <?php
   showError($errs,'pwd');
   
   ?> 
  <button type="submit" class="btn btn-primary">Submit</button>
      <p>already have an account</p>      <a class="nav-link" href="/mvc/sign_in">Sign in</a>

</form>