<?php

class Auth
{
     public function __construct($routes, $id_level)
     {
          if ($id_level == 2) {
               $this->operator($routes);
          } elseif ($id_level == 3) {
               $_GET['go'] = $this->pengguna($routes);
          }

          return $routes;
     }

     public function operator($routes)
     {
          $block = ['jurusan'];
          for ($i = 0; $i < count($block); $i++) {

               if (strpos($routes, $block[$i])) {
                    return $routes = "error";
                    break;
               }
          }
     }

     public function pengguna($routes)
     {
          $block = ['jurusan'];
          for ($i = 0; $i < count($block); $i++) {

               if (strpos($routes, $block[$i])) {
                    return $routes = "error";
                    break;
               }
          }
     }
}