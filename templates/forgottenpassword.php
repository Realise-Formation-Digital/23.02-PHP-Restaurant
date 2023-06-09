<?php 
    session_start();
    require_once('../logic_php/forgottenpassword.php'); 
    require_once('../templates/header.php'); 
?>
    <main>
        <div class="container-fluid">
            <div class="mt-5 mb-5">
                <div class="rounded d-flex justify-content-center">
                    <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                        <div class="text-center">
                            <h3 class="text-primary">Forgotten Password</h3>
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
                                
                                <!-- Confirmation message -->
                                <?php if(isset($confirmationMessage)) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <div>
                                            <?php echo($confirmationMessage); ?>
                                        </div>
                                    </div>
                                <?php } ?>

                                <!-- Username or e-mail input -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary"><i
                                            class="bi bi-person-plus-fill text-white"></i></span>
                                    <input name="usernameEmail" type="text" class="form-control" placeholder="Username or e-mail">
                                </div>

                                <!-- Submit button -->
                                <div class="d-grid col-12 mx-auto">
                                    <button class="btn btn-primary" type="submit"><span></span> Create new password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php require_once('../templates/footer.php') ?>