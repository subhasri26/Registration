<!DOCTYPE html>
<html>
<head>
  <title>Register</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
 .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #b9aaaa;
  color: white;
  text-align: center;
}
.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
label.error{
    color: red !important;
    font-weight: normal !important;
}
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #9fc4e4;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
  .label{
    color:red;
  }
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("#update").validate({
        rules: {
            firstname: "required",
            lastname: {
                required: true,
                minlength: 6
            },
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                number: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            firstname: "Please Enter your firstname",
            lastname: "Please Enter your lastname",
            mobile: "Please Enter your valid mobile",
            email: "Please Enter your valid email"
        }
    });
});
</script>

</head>
<body>
    <div class="header">
    <a class="active" href="<?php echo base_url()?>RegisterProcess/">Home</a>
  <div class="header-right">
    <a class="active" href="<?php echo base_url()?>selectdb/">Detail Page</a>
  </div>
</div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
            <div class="card-body">
            <h5 class="card-title text-center">Update Form</h5>
          <form role="form" action="<?php echo base_url('Registration/afterEdit');?>" method="POST" id="update">
                <?php foreach ($getdb->result() as $row) { $i=0; ?>
                 <tr>
                    <div class="container">
                    <input type="hidden" id="hide" name="id" value="<?php echo $row->id; ?>">

                    <div class="form-label-group">
                        <label>FirstName</label>
                        <input type="text" name="firstname" class="form-control" value="<?php echo $row->firstname; ?>" required>
                    </div>
                    <div class="form-label-group">
                        <label>LastName</label>
                        <input type="text" name="lastname" value="<?php echo $row->lastname; ?>" class="form-control">
                    </div>
                  <div class="form-label-group">
                      <label>Email Adress</label>
                      <input type="email" name="email" class="form-control" value="<?php echo $row->email; ?>">
                  </div>
                  <div class="form-label-group">
                    <label>Mobile No</label>
                    <input type="phone" class="form-control" name="mobile" value="<?php echo $row->mobile; ?>">
                  </div>
                  <?php } ?>
        <div class="form-label-group" align="center">
          <input type="submit" name="submit" id="btn" value="Update" class="btn btn-info">
        </div>
      </div>
</form>
       </div>
     </div>
   </div>
 </div>
</div>
     <div class="footer" id="footer" align="center">2019-2020 © <a href="#">RegisterForm.com</a> All rights reserved.</div>
</body>
</html>
<body>
    