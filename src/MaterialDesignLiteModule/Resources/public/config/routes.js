(function () {
    'use strict';

    angular
        .module('app')
        .config(AppRoutes);

    AppRoutes.$inject = ['$routeProvider', 'TEMPLATES_PATH'];

    function AppRoutes ($routeProvider, TEMPLATES_PATH) {
        // Home
        $routeProvider.when('/home', {
            templateUrl: TEMPLATES_PATH + '/home.html',
            controller: 'HomeCtrl'
        });

        // About
        $routeProvider.when('/about', {
            templateUrl: TEMPLATES_PATH + '/about.html',
            controller: 'AboutCtrl'
        });

        // Contact
        $routeProvider.when('/contact', {
            templateUrl: TEMPLATES_PATH + '/contact.html',
            controller: 'ContactCtrl'
        });

        // Portfolio item
        $routeProvider.when('/portfolio-item', {
            templateUrl: TEMPLATES_PATH + '/portfolio-item.html',
            controller: 'PortfolioItemCtrl'
        });

        // Sign In
        $routeProvider.when('/sign-in', {
            templateUrl: TEMPLATES_PATH + '/sign-in.html',
            controller: 'SignInCtrl'
        });

        // Sign Up
        $routeProvider.when('/sign-up', {
            templateUrl: TEMPLATES_PATH + '/sign-up.html',
            controller: 'SignUpCtrl'
        });

        $routeProvider.otherwise({redirectTo: '/home'});
    }
})();