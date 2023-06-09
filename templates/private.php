<?php 
    session_start();
    require_once('../logic_php/private.php');
    require_once('../templates/header.php');
?>

    <main>
        <h1 class="text-center mb-3 mt-5">Welcome to your Page !</h1><br>
        
        <h3 class="text-center mb-5">Messages:</h3>

        <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col col-sm-1 border border-opacity-50 border-dark m-2 text-center">
                <strong>Name</strong>
              </div>
              <div class="col col-sm-3 border border-opacity-50 border-dark m-2 text-center">
                <strong>E-mail</strong>
              </div>
              <div class="col col-sm-1 border border-opacity-50 border-dark m-2 text-center">
                <strong>Subject</strong>
              </div>
              <div class="col col-sm-5 border border-opacity-50 border-dark m-2 text-center">
                <strong>Message</strong>
              </div>
            </div>
          </div>


        <?php foreach($messages as $key => $message){ 
            if ($key != 0) {
        ?>
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col col-sm-1 border border-opacity-50 border-dark m-2 text-center">
              <?php echo($message[0]); ?>
              </div>
              <div class="col col-sm-3 border border-opacity-50 border-dark m-2 text-center">
              <a href="mailto:<?php echo($message[1])?>"><?php echo(substr($message[1], 0, 10)); ?>...</a>
              </div>
              <div class="col col-sm-1 border border-opacity-50 border-dark m-2 text-center">
              <?php echo($message[2]); ?>
              </div>
              <div class="col col-sm-5 border border-opacity-50 border-dark m-2 text-center">
              <?php echo($message[3]); ?>
              </div>
            </div>
          </div>
        <?php
             } 
        }
        ?>        

  </div>
  <div class="mb-5"></div>

    </main>
<?php require_once('../templates/footer.php') ?>