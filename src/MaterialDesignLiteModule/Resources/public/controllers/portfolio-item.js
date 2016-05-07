(function () {
    'use strict';

    angular
        .module('app')
        .controller('PortfolioItemCtrl', PortfolioItemCtrl);

    PortfolioItemCtrl.$inject = ['$scope', 'IMAGES_URL'];

    function PortfolioItemCtrl ($scope, IMAGES_URL) {
        $scope.images_url = IMAGES_URL;
    }
})();