angular.module('ForkInTime', ['ngRoute', 'ngSanitize', 'pascalprecht.translate'])
.config(['$translateProvider', function ($translateProvider) {

  $translateProvider.useStaticFilesLoader({
      files: [{
          prefix: '/i18n/fleet/locale-',
          suffix: '.json'
      }]
  });
  $translateProvider.preferredLanguage('en');

}]);
