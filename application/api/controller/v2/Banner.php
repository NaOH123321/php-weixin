<?php
namespace app\api\controller\v2;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\lib\exception\BannerMissException;
use think\Model;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @url /banner/:id
     * @http GET
     * @id  banner的id号
     *
     */
    public function getBanner($id)
    {
        return "sdsadadasdsadsadsa";
    }
}
