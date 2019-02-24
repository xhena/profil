<?php
session_start();
if(! isset($_SESSION['user']))
    header("Location: login/process2.php");
?>

<?php include "../nav_head/header.html"; ?>
<?php include "../nav_head/navbar.html"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>User Profile Widget - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
      
 .container{ 
    font-size: 30px;
         padding-left: 10px;
         margin-top: 45px;
         
      }
        h3{ font-family: sans-serif;
            padding-left: 20px;
              margin-top: 45px;
              margin-left: 95px;
        }
  
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    
            <ul class="list-group">
    
  <h3 class="blue"><?php echo $_SESSION['user']; ?></h3>
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            
                <div class="row">
                    <div class="col-sm-6 col-md-4">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" >
                    </div>
                    <div class="col-sm-6 col-md-8">
                        
                        <h4><strong>Email:</strong>  <?php echo $_SESSION['email']; ?></h4><br>
                        <h4><strong>About:</strong> </h4>
                        <br>
                        
                        <!-- Split button -->
                           <div class="btn-box">
                               <button class="btn btn-submit" type="submit" name="submit" id="submit"><a href="editprofile.php">Edit Profile</a></button>
    </div>
                    </div>
                    </div>
                </div>
            </div>
    </div>

	<script type="text/javascript">
		</script>
        </ul>
    
</body>
</html>
