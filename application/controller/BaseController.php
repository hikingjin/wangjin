<?php

/**
 * Created by PhpStorm.
 * User: wangjin
 * Date: 17/1/24
 * Time: 11:27
 */
namespace controller;
class BaseController {
  public static $a=123;
    public function base_mothod() {
        require_once BASE_PATH . '/application/view/hello.html';

    }
}