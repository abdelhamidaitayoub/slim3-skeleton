<?php
namespace Controller;

use Illuminate\Database\Eloquent;


use Model\User;

class HomeController extends Controller
{
  public function index($req, $res, $params) {
    $user = User::create([
      'id' => 1,
      'name' => 'Abdelhamid Ait-ayoub',
      'email' => 'abdelhamidaitayoub@gmail.com'
    ]);
    dump($user);
    return $this->view->render($res, 'home.twig', ['user' => 'hj']);
  }
}
