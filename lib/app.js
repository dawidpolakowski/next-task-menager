var taskApp = angular.module('taskApp', []);
taskApp.controller('cntrl', function ($scope, $http) {
    $scope.obj = {
        'idisable': false
    };
    $scope.btnName = "Insert";

    $scope.insertdata = function () {
        $http.post("lib/insert.php", {
                'id': $scope.id,
                'title': $scope.title,
                'btnName': $scope.btnName
            })
            .success(function () {
                $scope.msg = "Data Inserted";
            })

    }

    $scope.displayTask = function () {
        $http.get("lib/select.php")
            .success(function (data) {
                $scope.data = data
            })
    }
    $scope.deleteTask = function (id) {
        $http.post("lib/delete.php", {
                'id': id
            })
            .success(function () {
                $scope.msg = "Data Deletion successfull";
                $scope.displayTask();


            })

    }

    $scope.editTask = function (id, title) {
        $scope.id = id;
        $scope.title = title;
        $scope.btnName = "Update";
        $scope.obj.idisable = true;
        $scope.displayTask();

    }

});