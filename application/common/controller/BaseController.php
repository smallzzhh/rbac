<?php
/**
 * Created by PhpStorm.
 * User: dongmingcui
 * Date: 2017/11/9
 * Time: 下午2:12
 */

namespace app\common\controller;


use app\common\traits\Api;
use think\App;
use think\Controller;


abstract class BaseController extends Controller
{
    use Api;
    protected $admin_id = 0;
    protected $token = '';
    function __construct(App $app = null)
    {
        parent::__construct($app);
        $this->token = 'b714f8349c9905b3afabe687f5cd24aa193ae748';
        //$this->token = $_SERVER['HTTP_TOKEN'];
        $this->admin_id = 1;


        if(!$this->authValidation('')){
            $this->ajaxError(30001);   #访问错误
        }


    }

    #权限验证
    private function authValidation(string $token){
        return true;
    }
}