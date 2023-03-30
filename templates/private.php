<?php 
    session_start();
    require_once('../logic_php/private.php');
    require_once('../templates/header.php');
?>

    <main>
        <h1 class="text-center mb-3 mt-5">Welcome to your Page !</h1><br>
        
        <h3 class="text-center mb-5">Messages:</h3>
        <?php foreach($messages as $message){ ?>

          <div class="container-md">
            <div class="row">
              <div class="col-2 border border-dark m-2 text-center">
              <?php echo($message[0]); ?>
              </div>
              <div class="col-2 border border-dark m-2 text-center">
              <?php echo($message[1]); ?>
              </div>
              <div class="col-2 border border-dark m-2 text-center">
              <?php echo($message[2]); ?>
              </div>
              <div class="col-5 border border-dark m-2 text-center">
              <?php echo($message[3]); ?>
              </div>
            </div>
          </div>
        <?php  } ?>        

  </div>
  <div class="mb-5"></div>

    </main>
<?php require_once('../templates/footer.php') ?>