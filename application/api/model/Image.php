<?php

namespace app\api\model;

use think\db;
use think\Model;

class Image extends Model
{
    protected $hidden = ['id', 'from',  'delete_time', 'update_time'];
}
