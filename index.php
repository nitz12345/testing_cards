<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<title>Testing Cards</title>
		<link rel="stylesheet" href="style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<style>
			input.ng-invalid{ background-color: lightblue; }
		</style>
	</head>
	<body>
		<div ng-app="myApp" ng-controller="customersCtrl">
			<table border="1">
				<tr ng-repeat="x in names">
					<td>{{ x.id }}</td>
					<td>{{ x.user_name }}</td>
					<td>{{ x.user_email }}</td>
					<td>{{ x.firstname }}</td>
					<td>{{ x.lastname }}</td>
					<td>{{ x.user_pass }}</td>
				</tr>
			</table>
		</div>

		<script>
			var app = angular.module('myApp', []);
			var config = { headers: {
				"Access-Control-Allow-Origin": "*",
				"Access-Control-Allow-Methods": "GET, POST, DELETE, PUT"
			} };
			var data = { "test": "nitzan" };
			app.controller('customersCtrl', function($scope, $http) {
				/*$http({
					url: "http://production.nbenner.com/angular/mysql_connect.php",
					method: "POST",
					headers: {
						"Access-Control-Allow-Origin": "*"
					},
					data: { test: "nitzan" }
				}).then(function (response) {
					$scope.names = response.data;
				});*/
				$http.get("http://production.nbenner.com/angular/mysql_connect.php?test=nitzan", config)
					.then(function (response) {
					$scope.names = response.data;
				});
			});
		</script>
	</body>
</html>