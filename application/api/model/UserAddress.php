<?php

namespace app\api\model;

use think\db;

class UserAddress extends BaseModel
{
    protected $hidden = ['id', 'user_id', 'delete_time'];
}