<?php
include "configg.php";
$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>

<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    
    

    
    
    
    
    
</head>
<body ng-controller="memberdata" ng-init="fetch()">
    

<div class="sidebar">
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" style="color: white">TEAMS</a>
    
  </div>
  
</nav>

  <a href="index.php">Home</a>
  <a class ="active" href="crudapplication.php">Dashboard</a>
  <a href="About.php">About</a>
  <a href="Blog.php">Blog</a>
  <a href="logout.php">Logout</a>
</div>

<div class="content">
<div class="container">
    <h1 class="page-header text-center">CRUD APPLICATION</h1>
    <div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="alert alert-success text-center" ng-show="success">
				<button type="button" class="close" ng-click="clearMessage()"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-check"></i> {{ successMessage }}
			</div>
			<div class="alert alert-danger text-center" ng-show="error">
				<button type="button" class="close" ng-lick="clearMessage()"><span aria-hidden="true">&times;</span></button>
				<i class="fa fa-warning"></i> {{ errorMessage }}
			</div>
			<div class="row">
				<div class="col-md-12">
					<button href="" class="btn btn-primary" ng-click="showAdd()"><i class="fa fa-plus"></i> New Member</button>
					<span class="pull-right">
						<input type="text" ng-model="search" class="form-control" placeholder="Search">
					</span>
				</div>
			</div>
			<table class="table table-bordered table-striped" style="margin-top:10px;">
				<thead>
                    <tr>
                        <th ng-click="sort('firstname')" class="text-center">First Name
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='firstname'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='firstname'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                        </th>
                        <th ng-click="sort('lastname')" class="text-center">Last Name
	                        <span class="pull-right">
	                       		<i class="fa fa-sort gray" ng-show="sortKey!='lastname'"></i>
	                       		<i class="fa fa-sort" ng-show="sortKey=='lastname'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
	                       	</span>
                        </th>
                        <th ng-click="sort('address')" class="text-center">Address
                        	<span class="pull-right">
                       			<i class="fa fa-sort gray" ng-show="sortKey!='address'"></i>
                       			<i class="fa fa-sort" ng-show="sortKey=='address'" ng-class="{'fa fa-sort-asc':reverse,'fa fa-sort-desc':!reverse}"></i>
                       		</span>
                       	</th>
                       	<th class="text-center">Action</th>
                    </tr>
                </thead>
				<tbody>
					<tr dir-paginate="member in members|orderBy:sortKey:reverse|filter:search|itemsPerPage:5">
						<td>{{ member.firstname }}</td>
						<td>{{ member.lastname }}</td>
						<td>{{ member.address }}</td>
						<td>
							<button type="button" class="btn btn-success" ng-click="showEdit(); selectMember(member);"><i class="fa fa-edit"></i> Edit</button> 
							<button type="button" class="btn btn-danger" ng-click="showDelete(); selectMember(member);"> <i class="fa fa-trash"></i> Delete</button>
						</td>
 
					</tr>
				</tbody>
			</table>
			<div class="pull-right" style="margin-top:-30px;">
				<dir-pagination-controls
				   max-size="5"
				   direction-links="true"
				   boundary-links="true" >
				</dir-pagination-controls>
			</div>
		</div>
	</div>
	<?php include('modal.php'); ?>
</div>
<script src="https://rawgit.com/michaelbromley/angularUtils-pagination/master/dirPagination.js"></script>
<script src="angular.js"></script>


  
</div>




    
</body>
</html>