<?php

namespace app\api\model;

class Order extends BaseModel
{
    protected $hidden = ['User_id', 'delete_time', 'update_time'];
}