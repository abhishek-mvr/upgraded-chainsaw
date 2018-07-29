<?php
    include_once 'dbconnect.php';
    include_once 'checkLogin.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StichIt</title>
    <link rel="stylesheet" href="bulma.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
 
    
      <section class="hero is-primary is-danger is-bold" style="padding: 2vh">
        <div class="hero-body">
          <div class="container">
            <div style="display: flex;">
              <h2 class="subtitle" style="font-weight: bold;size: 58px;flex:4">stichIt.com</h2><h2 style=" float: left;margin-top: 50px">
              <a href="profile.php"><i class="fa fa-user-circle" style="font-size:50px;position: absolute; right: 0;margin-right: 10px">
              </i><br/><br/>
              <?php
                        if(isset($_SESSION['email']))
                  {
                        echo $_SESSION['name'];
                  }
                
                ?>
                </div>
                </a>
            <h1 class="title" style="font-size:80px">
              Login
            </h1>
            <h2 class="subtitle">
             

  get ready to wear 'em    </h2>
          </div>
        </div>
      </section>

      <section class="section">
      <div class="container">
        <form action="loginAction.php" method="post">

          <div style="width: 400px">
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input name="email" class="input is-danger" type="email" placeholder="Email" >
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                                
                </span>
              </p>
            </div>
            <div class="field">
              <p class="control has-icons-left">
                <input name="password" class="input is-danger" type="password" placeholder="Password" >
                <span class="icon is-small is-left">
                  <i class="fas fa-lock"></i>
                </span>
              </p>
            </div>
            <button type="submit" class="button is-danger" >Login</a>
          </div>
        </form>
        </div>
      </section>

  
  </body>
</html>