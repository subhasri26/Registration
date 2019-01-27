<!DOCTYPE html>
<html>
<head>
  <title>select database</title>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
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
  background-color: #9fc4e4;
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

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #c6d8e8;
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
  label.error{
    color: red !important;
    font-weight: normal !important;
}
}
</style>
<body>
  <div class="header">
    <a class="active" href="<?php echo base_url()?>RegisterProcess/">Home</a>
  <div class="header-right">
    <a class="active" href="<?php echo base_url()?>selectdb/">Detail Page</a>
  </div>
</div>
  <div class="page-header">
  <h1><p style="border-collapse:collapse;" align="center"> Details</p>
  </h1>
  </div>

 <div class="box-body table-responsive no-padding">
  <table id="example" class="table table-striped table-bordered" align="center" style="width:90%">
  <tr style="background:#e29def">
              <th>ID</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>
              <th>Mobile</th>
              <th colspan="2">Action</th>
          </tr>
              <?php foreach ($getdb as $row) { $i=0; ?>
             <tr>
                  <td><?php echo $row->id; ?></td> 
                  <td><?php echo $row->firstname; ?></td> 
                  <td><?php echo $row->lastname; ?></td> 
                  <td><?php echo $row->email; ?></td>  
                  <td><?php echo $row->mobile; ?></td> 
                  <!--<td><a href="<?php #echo base_url('RegisterProcess'); ?>">
                    <span class="glyphicon glyphicon-plus"></span></td> -->
                  <td><a href="<?php echo base_url('editdb/'.$row->id); ?>">
                  <span class="glyphicon glyphicon-edit"></span></a></td>
                  <td><a href="<?php echo base_url('deletedb/'.$row->id); ?>" style="color: red;">
                    <span class="glyphicon glyphicon-trash"></span>
                  </a>
              </td>
                <?php
                  $i++;
                } ?>
            </tr>
       </table>
    </div>
     <div class="footer" id="footer" align="center">2019-2020 © <a href="#">RegisterForm.com</a> All rights reserved.</div>
</body>
</html>