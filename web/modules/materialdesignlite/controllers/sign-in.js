(function () {
    'use strict';

    angular
        .module('app')
        .controller('SignInCtrl', SignInCtrl);

    SignInCtrl.$inject = ['$scope', 'UserService', 'CSS_URL'];

    /**
     * [SignInCtrl]
     * @param $scope
     * @param UserService
     * @constructor
     */
    function SignInCtrl ($scope, UserService, CSS_URL) {
        $scope.email      = '';
        $scope.password   = '';
        $scope.rememberme = true;
        $scope.cssUrl     = CSS_URL;

        $scope.basicAuth = function() {
            $scope.error   = '';
            $scope.success = '';
            $scope.details = '';

            UserService.basicAuth($scope.email, $scope.password, function(error, response) {
                // if has been ocurred an error
                if (error) {
                    $scope.error = 'An error has been ocurred while sign in.';
                    $scope.details = JSON.stringify(response);
                } else {
                    $scope.email = '';
                    $scope.password = '';

                    // Add action here
                    $scope.success = 'User authorized sussessfuly.';
                    $scope.details = JSON.stringify(response);
                }
            });
        };

        $scope.signIn = function () {
            $scope.error   = '';
            $scope.success = '';
            $scope.details = '';

            UserService.signIn($scope.email, $scope.password, function(error, response) {
                // if has been ocurred an error
                if (error) {
                    $scope.error = 'An error has been ocurred while sign in.';
                    $scope.details = JSON.stringify(response);
                } else {
                    $scope.email = '';
                    $scope.password = '';

                    // Add action here
                    $scope.success = 'User authorized sussessfuly.';
                    $scope.details = JSON.stringify(response);
                }
            });
        };
    }
})();