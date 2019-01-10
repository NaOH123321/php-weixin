<?php

namespace app\api\model;

use think\db;

class Product extends BaseModel
{
    protected $hidden = ['delete_time', 'update_time'];

}
