angular.module('search-ctrl', []).controller('searchCtrl', function ($scope, $rootScope, $http, $routeParams, $location) {

    $scope.search = function(user) {
        $http.get('http://localhost/we-do-good/server/app/api/search/' + user).success(function (response) {
            $rootScope.users = response;
            $location.path('/search');

            console.log(response)
        });
    }

});