var app = angular.module("NextkApp", []);

app.controller('NextkAppCtrl', function ($scope, $http) {

    $scope.myOrderBy = 'id';
    $scope.hideAdd = true;

     $scope.getTask = function (){
          $http.get("./lib/select.php")
        .then(function (response) {
            $scope.task = response.data.task;
        });
    };

  $scope.getTask();


    $scope.orderByMe = function (x) {
        $scope.myOrderBy = x;
    }

     $scope.hideAddTask = function (x) {
        $scope.hideAdd = x;
    }

        $scope.insert = function (taskTitle,taskDescription) {
    $http.post("./lib/insert.php?taskTitle="+taskTitle+"&taskDescription="+taskDescription).then(function(data){
       $scope.getTask();
      });
    };
   

   $scope.delete = function (id) {
    if(confirm("Are you sure to delete this line?")){
    $http.post("./lib/delete.php?id="+id).then(function(data){
       $scope.getTask();
      });
    }
  };

});