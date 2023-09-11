<?php 
namespace Modules\Home\Controllers;
use Modules\Home\Controllers\BaseController;

class Home extends BaseController{
    public function index(){
       // echo "hello website";
       echo view("Modules\Home\Views\home_page");
    }
}
?>