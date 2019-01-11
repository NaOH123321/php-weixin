<?php

namespace app\api\model;

use think\db;

class Product extends BaseModel
{
    protected $hidden = ['category_id', 'from', 'create_time', 'delete_time', 'update_time', 'pivot'];

    public function getMainImgUrlAttr($value, $data)
    {
        return $this->prefixImgUrl($value, $data);
    }

    public static function getMostRecent($count)
    {
        $products = self::limit($count)->order('create_time desc')
            ->select();
        return $products;
    }

    public static function getAllByCategoryID($categoryID)
    {
        $products = self::where('category_id', '=', $categoryID)
            ->select();
        return $products;
    }
}
