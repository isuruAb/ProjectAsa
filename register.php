<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
        <div class="container">
             <div class="row">
            <form class="col s12" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <input id="icon_prefix" type="text" name="name" class="validate">
                  <label for="icon_prefix">Name</label>
                  <input id="icon_prefix" type="text" name="username" class="validate">
                  <label for="icon_prefix">username</label>
                  <input id="icon_lock_outline" type="password" name="password" class="validate">
                  <label for="icon_lock_outline">password</label>
                  <input id="icon_lock_outline" type="password" name="password" class="validate">
                  <label for="icon_lock_outline">Confirm password</label>
                  <input id="icon_prefix" type="email" name="email" class="validate">
                  <label for="icon_prefix">email</label>
                  <input id="icon_prefix" type="tel" name="tel" class="validate">
                  <label for="icon_prefix">Telephone No</label>
                  <input id="icon_prefix" type="text" name="org" class="validate">
                  <label for="icon_prefix">Organization name</label>
                  <input id="icon_prefix" type="text" name="desig" class="validate">
                  <label for="icon_prefix">Your Designation</label>
                  <input  type="hidden" name="activated" value="0" >
                </div>
                <div class="input-field col s12">
                    <input type="submit" value="submit" name="submit" />
                </div>
              </div>
            </form>
            <!--Display errors-->
            <?php echo $errors; ?>
            <!--Display errors-->
          </div>
        </div>
    </body>
</html>