<?php

namespace app\api\controller\v1;

use app\api\controller\BaseController;
use app\api\service\Token;
use app\api\validate\OrderPlace;

class Order extends BaseController
{
    protected $beforeActionList = [
        'checkExclusiveScope' => ['only' => 'placeOrder']
    ];

    /**
     * 下单
     * @url /order
     * @HTTP POST
     */
    public function placeOrder()
    {
        (new OrderPlace())->goCheck();
        $products = input('post.products/a');
        $uid = Token::getCurrentUid();
        $order = new OrderService();
        $status = $order->place($uid, $products);
        return $status;
    }
}