<?php

/**
 * Created by PhpStorm.
 * User: wangjin
 * Date: 17/1/24
 * Time: 11:30
 */
use controller\BaseController;

require_once BASE_PATH.'/application/controller/BaseController.php';

class HelloaController extends BaseController{

    /**
     * HelloaController constructor.
     */
    public function __construct() {

    }

    public  function hello() {


        $a = new BaseController();
        $a->base_mothod();

    }

}