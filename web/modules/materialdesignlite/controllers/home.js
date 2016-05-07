(function () {
	'use strict';

	angular
        .module('app')
        .controller('HomeCtrl', HomeCtrl);

    HomeCtrl.$inject = ['$scope', 'IMAGES_URL'];

    function HomeCtrl ($scope, IMAGES_URL) {
        $scope.images_url = IMAGES_URL;
    }
})();