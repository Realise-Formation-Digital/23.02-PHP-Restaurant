<?php require_once('../templates/header.php') ?>

<?php require_once('../logic_php/signup.php') ?>


    <main>

    <!doctype html>
<html>

<meta charset="utf-8" />
<title>
Formulaire html
</title>


<div class="container-fluid">
      <div class="mt-5 mb-5">     
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary mb-4">Create your Account</h3>
                            <p style="text-align:center">
                            <img src="../img/dividergold.png" class="gold-divider" width="50%">
                        </p>
                            <?php if(isset($errpsw)) { ?>
                                <h4 class="alert alert-danger" role="alert"><?php echo($errpsw) ?></h4>
                            <?php } ?>
                            <?php if(isset($errmail)) { ?>
                                <h4 class="alert alert-danger" role="alert"><?php echo($errmail) ?></h4>
                            <?php } ?>
                            <?php if(isset($errmail)) { ?>
                                <h4 class="alert alert-danger" role="alert"><?php echo($err_usr_exists) ?></h4>
                            <?php } ?>
                            <?php if(isset($errmail)) { ?>
                                <h4 class="alert alert-danger" role="alert"><?php echo($err_mail_exists) ?></h4>
                            <?php } ?>
                        </div>
                        <div class="p-4">
                            <form method="POST" action="">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-envelope text-white"></i></span>
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input name="password" type="password" class="form-control" placeholder="password - lower & upper case & number required ">
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit"><span></span> Sign up</button>
                                </div>
                                <p class="text-center mt-5 mb-0">Already have an account?
                                    <span class="pseudolink text-primary" onclick="location='../templates/login.php'">Sign In</span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>



<?php require_once('../templates/footer.php') ?>