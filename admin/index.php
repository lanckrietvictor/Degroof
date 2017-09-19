<?php
  require "boot.php";

  if(!empty($_POST)){
    if($_POST["action"] == "login"){
      $user = checkLoginInformations($_POST["email"], $_POST["password"]);
      if($user){
        setLogged($user);
      }
    }
  }
  checkLogged();
?>

<?php require "partials/head.php"; ?>
<?php require "partials/navigation.php"; ?>


    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">My Dashboard</li>
        </ol>

        <!-- Icon Cards -->
        <div class="row">
        <textarea name="" id="" cols="30" rows="10">
          <?php require "../index.php" ?>
        </textarea>
          
        </div>


      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->


<?php require "partials/footer.php" ?>
