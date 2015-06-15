angular.module('ForkInTime').factory('Forklift', function($resource){
  return $resource('/forklifts/:id');
});
