angular.module('ForkInTime').controller('ForkliftsIndexCtrl', function($http, $scope){
  $http.get("/php/fleet.php").success(function(data){
    $scope.forklifts=data;
  })
});
