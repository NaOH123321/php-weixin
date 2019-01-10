<?php
namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\api\model\Theme as ThemeModel;
use app\lib\exception\ThemeException;

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
        $ids = explode(',', $ids);
        $result = ThemeModel::with('topicImg,headImg')->select($ids);
        if (count($result) == 0) {
            throw new ThemeException();
        }
        return $result;
    }

    public function getComplexOne($id)
    {
        return "sadsadsada";
    }
}

