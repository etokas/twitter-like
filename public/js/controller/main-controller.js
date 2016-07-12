angular.module('home-ctrl', []).controller('homeCtrl', function ($scope, $http, $routeParams) {

    $http.get('http://localhost/we-do-good/server/app').success(function (response) {
        $scope.tweets = response
    });

    $http.get('http://localhost/we-do-good/server/app/api/user/' + $routeParams.user_id).success(function (response) {
        $scope.user = response;
        $http.get('http://localhost/we-do-good/server/app/api/tweets/' + $routeParams.user_id).success(function (response) {
            $scope.tweetsUser = response
        });

    });

    $http.get('http://localhost/we-do-good/server/app/api/my-time-line').success(function (response) {
        $scope.timelines = response
    });


    $http.get('http://localhost/we-do-good/server/app/api/me').success(function (response) {
        $scope.me = response
    });


});