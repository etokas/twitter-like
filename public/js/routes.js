angular.module('app-routes', []).config(['$routeProvider', function ($routeProvider) {

    $routeProvider

        .when('/home', {
            templateUrl: 'templates/home.html',
            controller: 'homeCtrl'
        })

        .when('/account', {
            templateUrl: 'templates/account.html',
            controller: 'homeCtrl'
        })


        .when('/tweet', {
            templateUrl: 'templates/tweet.html',
            controller: 'homeCtrl'
        })

        .when('/search', {
            templateUrl: 'templates/search.html',
            controller: 'searchCtrl'
        })

        .when('/user/:user_id', {
            templateUrl: 'templates/user.html',
            controller: 'homeCtrl'
        });

}]);