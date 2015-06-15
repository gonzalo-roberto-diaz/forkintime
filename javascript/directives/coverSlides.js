angular.module('ForkInTime').directive("coverSlider", ["$interval", function($interval) {

    return {
        restrict: "A",
        link: function(scope, elem, attrs) {
           var currentIndex = 0;
           var arrImages = $(elem).find(".cover-slider-item");
           $(arrImages[0]).fadeIn("slow");
           //On interval
           $interval(function() {
             var nextIndex = currentIndex +1;
             if (nextIndex >= arrImages.length){
               nextIndex = 0;
             }
             $(arrImages[currentIndex]).hide();
             $(arrImages[nextIndex]).fadeIn("slow");
             currentIndex = currentIndex+1;
             if (currentIndex == arrImages.length){
                 currentIndex = 0;
             }
           }, 6000);
        }
    };



}]);
