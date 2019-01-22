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
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $company = $_POST['company'];
        $tel = $_POST['tel'];
        $message = $_POST['message'];
        if (!empty($name) && !empty($email) && !empty($tel)) {
            $adminEmail = 'tst@test.com';
            $data = [
                'name' => $name,
                'surname' => $surname,
                'company' => $company,
                'email' => $email,
                'tel' => $tel,
                'message' => $message
            ];
            $this->view->vars(compact('data'));

            $message = $this->view->renderEmail('email');
            $subject = 'Із сайту';
            $result = mail($adminEmail, $subject, $message, "Content-Type: text/html; charset=UTF-8");
            if ($result) {
                echo "<div class='alert alert-success alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Message sent sucessfully</div>";

                return true;
            } else {
                echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Fuack! Cannot send sranishe message</div>";

                return false;
            }
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Fuack! Cannot send sranishe message</div>";
        }
    }
}
