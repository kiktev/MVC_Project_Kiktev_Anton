<?php
namespace Controllers;

use Core\Controller;
use Core\View;
use Core;
/**
 * Class IndexController
 */
class IndexController extends Controller
{

    /**
     *
     */
    public function indexAction()
    {
        $this->set("title", "Test shop");
		$user = Core\Helper::getCustomer();
		$user_name = $user['first_name'];
		$this->set('user_name', $user_name);
        $this->renderLayout();
    }

    /**
     *
     */
    public function testAction()
    {
        echo "hello from testAction";
    }

}