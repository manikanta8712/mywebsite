<?php 
namespace Modules\Admin\Controllers;
use Modules\Admin\Controllers\BaseController;

class Login extends BaseController{
    public function index(){
       echo view("Modules\Admin\Views\login_page");
    }
}
?>