<?php

namespace app\api\model;

use think\db;

class BannerItem extends BaseModel
{
    // protected $hidden = ['id', 'img_id', 'banner_id', 'delete_time', 'update_time'];
    public function topicImg()
    {
    	return $this->belongsTo('Image','topic_img_id','id');
    }

    public function headImg()
    {
    	return $this->belongsTo('Image','head_img_id','id');
    }
}
