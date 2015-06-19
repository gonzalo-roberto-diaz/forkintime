angular.module('ForkInTime')
.controller('ForkliftsIndexCtrl', ['$http', '$translate', '$scope',   function($http, $translate,  $scope){



    $http({url: "/php/fleet.php" , method: 'GET'}).success(function(data){
      // for (var i=0; i<data.length; i++){
      //   var row=data[i];
      //   data["engine_type_trans_key"] = $translate.instant(data["engine_type_trans_key"]);
      // }
      $scope.forklifts = data;
    });





}]);
