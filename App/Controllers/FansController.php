<?php


namespace App\Controllers;
use App\Core\AControllerBase;
use App\Models\Fan;
class FansController extends AControllerBase
{
    public function index()
    {
        return Fan :: getAll();
    }

    public function register() {
        if(!isset($_POST['name'])) return null;
        $fans = $this->index();
        foreach ($fans as $fan) {
            if ($fan->getName() == $_POST['name']) {
                //header("Location: http://localhost/semestralka?c=Fans");
                return 'This name is used, try oder';
            }
        }
        if (!$this->validateLength($_POST['name'])) {
            return 'Short name!';
        }
        if (!$this->validateLength($_POST['password'])) {
            return 'Short password!';
        }
        $fan = new Fan($this->validateName($_POST['name']) , $_POST['password'], $_POST['favPlayer']);
        $fan->save();
        header("Location: http://localhost/semestralka?c=Fans&a=login");
        die();
    }

    private function validateName($name)
    {
        $validname = ltrim($name);
        return $validname;
    }

    private function validateLength($par)
    {
        $isValid = true;
        if (strlen($par) < 4) {
            $isValid = false;
        }
        return $isValid;
    }

    public function login() {
        if (isset($_POST['name']) && isset($_POST['password'])) {
            $fans = $this->index();
            foreach ($fans as $fan) {
                if ($fan->getName() == $_POST['name'] && $fan->getPassword() == $_POST['password']) {
                    session_start();
                    $_SESSION["id"] = $fan->getId();
                    header("Location: http://localhost/semestralka?c=Fans&a=edit");
                    return 'Wrong name or password';

                }
            }
        }
    }
    public function edit(){
        if (isset($_POST['name']) && isset($_POST['password'])) {
            session_start();
            $fan = Fan::getOne(@$_SESSION["id"]);
            $fans = $this->index();
            foreach ($fans as $fan1) {
                if ($fan1->getName() == $_POST['name']) {
                    if ($fan1->getName() != @$_SESSION["id"]) {
                        header("Location: http://localhost/semestralka?c=Fans&a=edit");
                        return 'This name is used, try oder';
                    }
                }
            }
            if (!$this->validateLength($_POST['password'])) {
                return 'Short name!';
            }
            if (!$this->validateLength($_POST['password'])) {
                return 'Short password!';
            }
            $fan->setName($_POST['name']);
            $fan->setPassword($_POST['password']);
            if (isset($_POST['favPlayer']))
                $fan->setFavPlayer($_POST['favPlayer']);
            $fan->save();
            header("Location: http://localhost/semestralka?c=Fans&a=edit");
            die();
        }
    }
    public function delete() {
        session_start();
        $fan =  Fan::getOne(@$_SESSION["id"]);
        $fan->delete();
        header("Location: http://localhost/semestralka");
        session_destroy();
        die();
    }
}