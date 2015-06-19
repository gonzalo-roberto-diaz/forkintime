angular.module('ForkInTime')
.controller('OurServicesTranslationCtrl', function ($scope, $translatePartialLoader, $translate) {
  $translatePartialLoader.addPart('ourServices');
  $translate.refresh();
});
