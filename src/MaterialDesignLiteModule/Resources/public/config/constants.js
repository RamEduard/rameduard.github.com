(function () {
    'use strict';

    angular
        .module('app')
        .constant('API_URL', '/web/api')
        .constant('ASSETS_URL', '/web/assets')
        .constant('MODULES_URL', '/web/modules')
        .constant('CSS_URL', '/web/modules/materialdesignlite/css')
        .constant('IMAGES_URL', '/web/modules/materialdesignlite/images')
        .constant('JS_URL', '/web/modules/materialdesignlite/js')
        .constant('TEMPLATES_PATH', '/web/modules/materialdesignlite/templates');

})();
