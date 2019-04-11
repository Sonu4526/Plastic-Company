<!DOCTYPE html>
<html lang="en" >
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="js/jquery-min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<div class="container-fluid" ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>John's Blog</h4>
      <ul class="nav nav-pills nav-stacked" style="font-weight: bold;">
        <li class="active"><a href="admin.php">Stock</a></li>
        <li><a href="admin2.php">Team Members</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="#section3">Messages</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>STOCK ENTRY</small></h4>
      <hr>
     <?php include "index.php"; ?>
    </div>
  </div>
</div>



<footer style="text-align: center;">
  Sonu@14802.co.in
</footer>

</body>
</html>
