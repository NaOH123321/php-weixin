<?php

namespace app\api\model;

use think\db;

class Category extends BaseModel
{
    protected $hidden = ['create_time', 'delete_time', 'update_time'];

    public function img()
    {
    	return $this->belongsTo('Image','topic_img_id','id');
    }
}
