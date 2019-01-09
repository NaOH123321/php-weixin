<?php
namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use think\Model;

class Theme
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id  banner的id号
     *
     */
    public function getSimpleList($ids = '')
    {   
        (new IDCollection())->goCheck();

        return "sadsadadasdsddsd";
    }
}

