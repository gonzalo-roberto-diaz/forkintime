angular.module('ForkInTime')
.config(function($routeProvider){
  $routeProvider.when('/service', {templateUrl: '/templates/pages/service/index.html'})
  .when('/ourfleet', {templateUrl: '/templates/pages/ourfleet/index.html'})
  .when('/whyus', {templateUrl: '/templates/pages/whyus/index.html'})
  .when('/contact', {templateUrl: '/templates/pages/contact/index.html'})
  .otherwise({redirectTo: '/service'});
});
