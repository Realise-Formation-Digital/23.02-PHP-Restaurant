<?php require_once('../templates/header.php') ?>
<?php require_once('../logic_php/login.php') ?>
    <main>
    <div class="container-fluid">
            <div class="mt-5 mb-5">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Login</h3>
                        </div>
                        <div class="p-4">
                            <form method="POST" action="">
                                <?php if(isset($errorMessage)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <div>
                                            <?php echo($errorMessage); ?>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input name="username" type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-key-fill text-white"></i></span>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="d-grid col-12 mx-auto">
                                    <button name="signup" class="btn btn-primary" type="submit"><span></span> Login</button>
                                </div>
                                <p class="text-center mt-5">Don't have an account?
                                    <span class="text-primary"><a href="./signup.php">Sign up</span>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once('../templates/footer.php') ?>