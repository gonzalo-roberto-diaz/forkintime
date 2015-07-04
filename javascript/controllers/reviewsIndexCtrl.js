angular.module('ForkInTime').controller('ReviewsIndexCtrl', function($http, $scope){
  $http.get("php/reviews.php").success(function(data){
    $scope.reviews=data;
  })
});
