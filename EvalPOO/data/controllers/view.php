<?php

class Page
{
  public $head = "./views/templates/head.html";   // propriétées de classe Page
  public $foot = "./views/templates/foot.html";
  public $home ;
  public $products;
  public $contact;
  public $path;
  public $uri;

  public function __construct($uri)             // récupère uri
  {
    $this->path = "./views/templates" . $uri;
    $this->uri =$uri;
  }

  public function getContent($invers, $uri)
  {
    $directory = "./views/templates/";

    $content = array_diff(scandir($directory),[                   // parcour et récupère les fichiers contenu dans templates - les fichier dont je ne veux pas grace a arra_diff
      ".",
      "..",
    ]);

    if($invers===true) {                       // les élemenr son dans l'ordre de base si invers = true, on les met dans le désordre
      arsort($content);
    }


    $show = "<main>";
    foreach ($content as $key => $value) {             // bon ba temsp pis pour moi
      $show .= "<section>" . file_get_contents($directory . $value) . "</section>";
    }
    $show .="</main>";

    echo $show;
  }
}


 ?>
