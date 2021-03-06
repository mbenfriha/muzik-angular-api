<?php
namespace App\Controller;

use Core\Controller\Controller;

class ArtistsController extends Controller {
    public function __construct() {
        $this->loadModel('Artists');
    }

    public function getAll()
    {
        $artists = $this->Artists->all();

        $this->render(compact('artists'), true);
    }
    public function single($id)
    {
        $artists = $this->Artists->single($id);
        $this->render(compact('artists'), true);
    }
}