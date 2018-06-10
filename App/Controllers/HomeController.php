<?php

namespace App\Controllers;

use App\Components\Dict;
use App\Components\Controller as BaseController;

class HomeController extends BaseController
{

    public function index()
    {
        return $this->view->render('index');
    }

    public function emailUs()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $content = $_POST['text'];
        if (!empty($name) && !empty($email) && !empty($phone)) {
            $adminEmail = 'for.spam.kolia@mail.ru';
            $data = [
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'content' => $content
            ];
            $this->view->vars(compact('data'));

            $message = $this->view->renderEmail('email');
            $subject = 'Із сайту';
            $result = mail($adminEmail, $subject, $message, "Content-Type: text/html; charset=UTF-8");
            if ($result) {
                echo "<div class='alert alert-success modal' style='width: 380px;margin: 0 auto; display:block;bottom:initial; overflow-y:hidden; top:25%;'><button class='close' data-dismiss='alert'><i class='fa fa-times'></i></button>" . Dict::_('messageSuccess') . "</div>";

                return true;
            } else {
                echo "<div class='alert alert-danger modal' style='width: 380px;margin: 0 auto; display:block;bottom:initial; overflow-y:hidden; top:25%;'><button class='close' data-dismiss='alert'><i class='fa fa-times'></i></button>" . Dict::_('messageError') . "</div>";

                return false;
            }
        } else {
            echo "<div class='alert alert-danger modal' style='width: 380px;margin: 0 auto; display:block;bottom:initial; overflow-y:hidden; top:25%;'><button class='close' data-dismiss='alert'><i class='fa fa-times'></i></button>" . Dict::_('messageNotValid') . "</div>";
        }
    }
}
