angular.module('ForkInTime', ['ngRoute', 'ngSanitize', 'pascalprecht.translate'])
.config(['$translateProvider', function ($translateProvider) {


  $translateProvider.useStaticFilesLoader({
      files: [
        { prefix: 'i18n/ourServices/locale-', suffix: '.json'},
        { prefix: 'i18n/fleet/locale-', suffix: '.json'},
        { prefix: 'i18n/global/locale-', suffix: '.json'},
        { prefix: 'i18n/reviews/locale-', suffix: '.json'},
      ]
  });
  $translateProvider.preferredLanguage('en');
  $translateProvider.useSanitizeValueStrategy('escaped');

}]);
