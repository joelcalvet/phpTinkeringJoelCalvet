<?php
//Fitxer per gestionar les rutes
namespace Core;

use RuntimeException;

class Route
{
    protected $routes = [];
    public function register($route)
    {
        $this->routes[] = $route;
    }
    public function define($route)
    {
        $this->routes = $route;
        return $this;
    }

    public function redirect($uri)
    {
        //partim la url
        $parts = explode('/', trim($uri,'/'));
        //indiquem ruta del controlador
        $controller = 'App\Controllers\FilmController';

        //Inici
        if ($uri === '/') {
            require '../App/Controllers/LandingController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\LandingController();
            return $controllerInstance->index();
        }

        // Films route
        if ($parts[0] === 'films') {
            require '../App/Controllers/FilmController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\FilmController();
            return $controllerInstance->index();
        }

        // Metal create
        if($parts[0] === 'metal' && $parts[1] === 'create') {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            return $controllerInstance->create();
        }

        // Metal store
        if ($parts[0] === 'metal' && $parts[1] === 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            return $controllerInstance->store($data);
        }

        // Metal edit
        if($parts[0] === 'metal' && $parts[1] === 'edit' && $parts[2]) {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            return $controllerInstance->edit($parts[2]);
        }

        // Metal update
        if ($parts[0] === 'metal' && $parts[1] === 'update' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            //creem variable per agafar les dades de la petició post
            $data = $_POST;
            //comprovem si pasen id
            if (!isset($_POST['idCanso'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->update($_POST['idCanso'], $data);
        }

        // Metal delete
        if($parts[0] === 'metal' && $parts[1] === 'delete' && $parts[2]) {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            return $controllerInstance->delete($parts[2]);
        }

        // Metal destroy
        if ($parts[0] === 'metal' && $parts[1] === 'destroy' && $_SERVER['REQUEST_METHOD'] === 'POST') {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            //comprovem si pasen id
            if (!isset($_POST['idCanso'])){
                throw new RuntimeException('No id provided');
            }
            return $controllerInstance->destroy($_POST['idCanso']);
        }

        // Metal index
        if ($parts[0] === 'metal') {
            require '../App/Controllers/MetalController.php';
            //creem nova instancia
            $controllerInstance = new \App\Controllers\MetalController();
            return $controllerInstance->index();
        }

        //si no es cap dels anteriors retornem la vista 404
        return require '../resources/views/errors/404.blade.php';
    }
}