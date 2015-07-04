angular.module('ForkInTime')
.controller('ForkliftsIndexCtrl', ['$http', '$scope',   function($http,  $scope){

    $http({url: "php/fleet.php" , method: 'GET'}).success(function(data){
      $scope.forklifts = data;
    });





}]);
