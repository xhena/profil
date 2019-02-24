

<?php include "../nav_head/header.html"; ?>
<?php include "../nav_head/navbar.html"; ?>


<!DOCTYPE html>
<html lang="en">

    <head>
  <title>SR PROFILE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
   <style>
     
       
       h2{
           text-align: center;
        
       }
   
       .list-group-item{
           		color: #fff;
		        background: #3d3d42;
		        font-family: 'Varela Round', sans-serif;
       }
</style>
</head>
<body>
    
<hr>
    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<div class="container bootstrap snippet">
       

    
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar" >
       
        <input type="file" class="text-center center-block file-upload" name="u_image" required="required">
            </div><br>            
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="list-group">
    
  <h2 class="list-group-item text-muted">Edit Profile</h2>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
     <br><br>

           <div class="form-group">
          <label class="col-md-3 control-label" for="email">Email:</label>
          <div class="col-md-8">
            <input class="form-control" id="email" name="email"  type="email" data-validetta="required,email" >
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input class="form-control" name="pass" value="" type="password" required="required">
          </div>
        </div>
                 <div class="form-group">
          <label class="col-md-3 control-label">Confirm Password:</label>
          <div class="col-md-8">
            <input class="form-control" name="confirmpass" value="" type="confirmpassword" required="required">
          </div>
        </div>
          <div class="form-group row">
            <label class="col-md-3 control-label">About:</label> 
              <div class="col-md-8">
              <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
            </div>
           </div>
       
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
              <button class="btn btn-primary" name="update" value="Update">Update</button>
            
              <button class="btn btn-primary" style="margin-left: 20px"> Reset</button>
        
          </div>
            </div>
    
      
        </div>
        
   

            </ul>
        </div>
            </div>
        </div>
    </form>


    </body>
    </html>
