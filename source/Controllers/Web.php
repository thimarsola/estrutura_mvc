<?php

namespace Source\Controllers;

class Web extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
        
        if (!empty($_SESSION["user"])){
            $this->router->redirect("app.home");
        }
    }
    
    public function home(): void
    {
        $style = "css/estilos.css";

        $head = $this->seo->optimize(
            site("name"), 
            site("desc"), 
            $this->router->route("web.home"), 
            routeImage("Home")
        )->render();
        
        echo $this->view->render("home", [
            "head" => $head,
            "style" => $style
        ]);
        
    }
    
    public function error($data): void
    {
        $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);
        
        $style = "css/error.css";
        
        $head = $this->seo->optimize(
            "Ooops - Erro {$error} | " . site("name"), 
            site("desc"), 
            $this->router->route("web.error", ["errcode" => $error]), 
            routeImage($error)
        )->render();
        
        echo $this->view->render("error", [
            "head" => $head,
            "style" => $style,
            "error" => $error
        ]);
    }
}
