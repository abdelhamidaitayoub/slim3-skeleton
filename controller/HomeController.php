<?php
namespace Controller;

use Illuminate\Database\Eloquent;


use Model\User;

class HomeController extends Controller
{
  public function index($req, $res, $params) {
    $user = User::all()->find(1);
    dump($user);
    return $this->view->render($res, 'home.twig', ['user' => 'hj']);
  }
}
