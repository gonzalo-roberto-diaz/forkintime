angular.module('ForkInTime').controller('CoverSlidesCtrl', function($scope){
  $scope.images = [
    {src: 'images/cover-slides/autoelevador-01.jpg', title: 'Forklift 1'},
    {src: 'images/cover-slides/autoelevador-02.jpg', title: 'Forklift 2'},
    {src: 'images/cover-slides/autoelevador-03.jpg', title: 'Forklift 3'},
    {src: 'images/cover-slides/autoelevador-04.jpg', title: 'Forklift 4'},
    {src: 'images/cover-slides/autoelevador-05.jpg', title: 'Forklift 5'}
  ];

  $http.get("/php/fleet.php").success(function(data){
    $scope.forklifts=data;
  })
});
