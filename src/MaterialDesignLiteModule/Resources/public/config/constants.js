(function () {
    'use strict';

    angular
        .module('app')
        .constant('API_URL', 'http://localhost/ramonserrano.com/web/api')
        .constant('ASSETS_URL', 'http://localhost/ramonserrano.com/web/assets')
        .constant('MODULES_URL', 'http://localhost/ramonserrano.com/web/modules')
        .constant('CSS_URL', 'http://localhost/ramonserrano.com/web/modules/materialdesignlite/css')
        .constant('IMAGES_URL', 'http://localhost/ramonserrano.com/web/modules/materialdesignlite/images')
        .constant('JS_URL', 'http://localhost/ramonserrano.com/web/modules/materialdesignlite/js')
        .constant('TEMPLATES_PATH', 'http://localhost/ramonserrano.com/web/modules/materialdesignlite/templates');

})();
