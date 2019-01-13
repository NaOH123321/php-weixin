<?php

namespace app\api\model;

use think\db;

class ProductProperty extends BaseModel
{
    protected $hidden = ['id', 'product_id', 'delete_time'];
}