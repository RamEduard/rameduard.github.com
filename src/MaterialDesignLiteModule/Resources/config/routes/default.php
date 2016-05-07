<?php

/**
 * Default route
 *
 * @author Ramon Serrano <ramon.calle.88@gmail.com>
 */
$app->match("/mdl", "MaterialDesignLiteModule\\Controller\\DefaultController::index")
    ->bind("mdl_default_index");
