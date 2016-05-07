<?php

/**
 * estatus API routes
 *
 * @author Ramon Serrano <ramon.calle.88@gmail.com>
 */


/**
 * List route
 */
$app->get('/api/estatus', 'APIModule\\Controller\\EstatusController::index')
    ->bind('estatus_list');

/**
 * Create route
 */
$app->match('/api/estatus/create', 'APIModule\\Controller\\EstatusController::create')
    ->bind('estatus_create');

/**
 * Edit route
 */
$app->match('/api/estatus/edit/{id}', 'APIModule\\Controller\\EstatusController::edit')
    ->bind('estatus_edit');

/**
 * Delete route
 */
$app->match('/api/estatus/delete/{id}', 'APIModule\\Controller\\EstatusController::delete')
    ->bind('estatus_delete');

/**
 * Restricted route
 */
$app->get('/api/estatus/restricted', 'APIModule\\Controller\\EstatusController::restricted')
    ->bind('estatus_restricted');