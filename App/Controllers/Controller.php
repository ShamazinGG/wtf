<?php
namespace App\Controllers;

use Core;

include 'Core/Model.php';
include 'Core/View.php';


class Controller
{
    public $Model;
    public $View;
    public function __construct()
    {
        $this->Model = new Core\Model();
        $this->View = new Core\View();
    }

    public function indexAction()
   {
        $this->View->index();
    }







}