<?php

/**
 * users API routes
 *
 * @author Ramon Serrano <ramon.calle.88@gmail.com>
 */


/**
 * List route
 */
$app->get('/api/users', 'APIModule\\Controller\\UsersController::index')
    ->bind('users_list');

/**
 * Create route
 */
$app->match('/api/users/create', 'APIModule\\Controller\\UsersController::create')
    ->bind('users_create');

/**
 * Edit route
 */
$app->match('/api/users/edit/{id}', 'APIModule\\Controller\\UsersController::edit')
    ->bind('users_edit');

/**
 * Delete route
 */
$app->match('/api/users/delete/{id}', 'APIModule\\Controller\\UsersController::delete')
    ->bind('users_delete');

/**
 * Restricted route
 */
$app->get('/api/users/restricted', 'APIModule\\Controller\\UsersController::restricted')
    ->bind('users_restricted');