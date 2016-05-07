<?php

namespace Application;

use MVC\Module\Module as BaseModule;

/**
 * Description of Module
 *
 * @author Ramón Serrano <ramon.calle.88@gmail.com>
 */
abstract class MVCModule extends BaseModule
{
    
    /**
     * Register Templates Path Twig
     * 
     * @param $app
     */
    public function registerTemplatesPathTwig($app)
    {
        $viewsPath = $this->getPath() . '/Resources/views';
        if (file_exists(dirname($viewsPath)) && file_exists($viewsPath)) {
            $app['twig.loader.filesystem']->addPath($viewsPath);
        }
    }
    
}
