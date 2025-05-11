<?php
require basePath( "views/partes/head.php");
require basePath( "views/partes/nave.php");

?>
<form action="/mvc/sign_in" method="post">
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" value="<?= $_POST['email']??''?>"  name="email" class="form-control <?= isset($errs['empty'])?"is-invalid":''?>" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <?php showError($errs,'empty')  ?>
      <?php showError($errs,'email')  ?>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pwd" class="form-control <?= isset($errs['empty'])?"is-invalid":''  ?>" id="exampleInputPassword1">
  </div>
    <?php showError($errs,'empty')  ?>
    <?php showError($errs,'pwd')  ?>

 
  <button type="submit" class="btn btn-primary">Submit</button>
      <p>don't hav an account</p>      <a class="nav-link" href="/mvc/register">Register</a>

</form>