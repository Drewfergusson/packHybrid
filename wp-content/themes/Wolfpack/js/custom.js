
(function(){
  var pageApp = angular.module('indexApp', []);

    pageApp.controller('leadController', ['$scope', '$window', function($scope, $window){
      if($window.innerWidth <= 1024){
        $scope.videoArea = 'hidden';
        $scope.textArea = 'col-sm-12 text-center';
      } else{
        $scope.textArea = 'col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1'
      }
    }]);

})();
