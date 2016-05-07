<?php

/**
 * image API routes
 *
 * @author Ramon Serrano <ramon.calle.88@gmail.com>
 */


/**
 * List route
 */
$app->get('/api/image', 'APIModule\\Controller\\ImageController::index')
    ->bind('image_list');

/**
 * Create route
 */
$app->match('/api/image/create', 'APIModule\\Controller\\ImageController::create')
    ->bind('image_create');

/**
 * Edit route
 */
$app->match('/api/image/edit/{id}', 'APIModule\\Controller\\ImageController::edit')
    ->bind('image_edit');

/**
 * Delete route
 */
$app->match('/api/image/delete/{id}', 'APIModule\\Controller\\ImageController::delete')
    ->bind('image_delete');

/**
 * Restricted route
 */
$app->get('/api/image/restricted', 'APIModule\\Controller\\ImageController::restricted')
    ->bind('image_restricted');