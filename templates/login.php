<?php 
    session_start();
    require_once('../logic_php/login.php');
    require_once('../templates/header.php');
?>
    <main>
    <div class="container-fluid">
            <div class="mt-5 mb-5">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Login</h3>
                        </div>
                        <p style="text-align:center;">
                            <img src="../img/dividergold.png" class="gold-divider" width="50%">
                        </p>
                        <div class="p-4">
                            <form method="POST" action="">

                                <!-- Error message -->
                                <?php if(isset($errorMessage)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <div>
                                            <?php echo($errorMessage); ?>
                                        </div>
                                    </div>
                                <?php } ?>

                                <!-- Username input -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                </div>

                                <!-- Password input -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit"><span></span> Login</button>
                                </div>

                                <!-- Sign up link -->
                                <p class="text-center mt-5">Don't have an account ?
                                    <span class="text-primary"><a href="./signup.php">Sign up</a></span>
                                </p>

                                <!-- Forgotten password link -->
                                <p class="text-center mt-1">Forgotten password ?
                                    <span class="text-primary"><a href="./forgottenpassword.php">New password</a></span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once('../templates/footer.php') ?>