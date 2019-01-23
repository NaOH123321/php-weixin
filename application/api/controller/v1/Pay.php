<?php

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\service\Pay as PayService;
use app\api\validate\IDMustBePostiveInt;
use app\api\service\WxNotify;

include '../extend/wxpay/WxPay.Config.php';
use wxpay\WxPayConfig;

class Pay extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'getPreOrder']
    ];

    public function getPreOrder($id = '')
    {
        (new IDMustBePostiveInt())->goCheck();
        $pay = new PayService($id);
        return $pay->pay();
    }

    public function redirectNotify()
    {
        $notify = new WxNotify();   
        $config = new WxPayConfig();
        $notify->Handle($config);
    }
}
