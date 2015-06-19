angular.module('ForkInTime')
.controller('OurFleetTranslationCtrl', function ($scope, $translatePartialLoader, $translate) {
  $translatePartialLoader.addPart('fleet');
  $translate.refresh();
});
