<?php

/**
 * perfils API routes
 *
 * @author Ramon Serrano <ramon.calle.88@gmail.com>
 */


/**
 * List route
 */
$app->get('/api/perfils', 'APIModule\\Controller\\PerfilsController::index')
    ->bind('perfils_list');

/**
 * Create route
 */
$app->match('/api/perfils/create', 'APIModule\\Controller\\PerfilsController::create')
    ->bind('perfils_create');

/**
 * Edit route
 */
$app->match('/api/perfils/edit/{id}', 'APIModule\\Controller\\PerfilsController::edit')
    ->bind('perfils_edit');

/**
 * Delete route
 */
$app->match('/api/perfils/delete/{id}', 'APIModule\\Controller\\PerfilsController::delete')
    ->bind('perfils_delete');

/**
 * Restricted route
 */
$app->get('/api/perfils/restricted', 'APIModule\\Controller\\PerfilsController::restricted')
    ->bind('perfils_restricted');