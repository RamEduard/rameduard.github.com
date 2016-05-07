<?php

/**
 * Default route
 *
 * @author Ramon Serrano <ramon.calle.88@gmail.com>
 */

$app->get("/", "MaterialDesignLiteModule\\Controller\\DefaultController::commingSoon")
    ->bind("mdl_default_comming_soon");

$app->match("/mdl", "MaterialDesignLiteModule\\Controller\\DefaultController::index")
    ->bind("mdl_default_index");
