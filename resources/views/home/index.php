<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Linux Buddy</title>

    <!-- Bootstrap -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1>Linux Buddy</h1>
        <form method="POST">
          <div class="form-group">
            <label for="search">Find Command</label>
            <input type="search" class="form-control" id="search" name="search" placeholder="Search" value="<?php echo $search;?>">
          </div>
          <div class="form-group">
            <?
              /**
               * TODO: Replace all this with Twig or Blade
               * Messy at the moment
               */
            ?>
            <textarea class="form-control" rows="20" id="comment"><?php echo '----Results----&#10;';
                if ($results) {
                  foreach ($results as $key => $result) {
                    echo 'Description: '.$result['description'].'&#10;';
                    echo 'Commands: '.$result['command'].'&#10;';
                    echo 'Operating System: '.$result['os'].'&#10;';
                    echo '-----------------';
                  }
                } else {
                  echo 'No commands found';
                }
              ?>
            </textarea>
          </div>
          <button type="submit" class="btn btn-default">Search</button>
        </form>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/dist/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>