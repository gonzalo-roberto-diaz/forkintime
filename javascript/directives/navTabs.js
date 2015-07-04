angular.module('ForkInTime').directive('navTabs', function(){
  return {
    restrict: 'E',
    templateUrl: 'templates/directives/navTabs.html',
    scope: {
      currentTab: '@'
    },

    link: function(scope, element, attributes){
      $(element).find("#" + scope.currentTab).addClass("active");
    }
  }
});
