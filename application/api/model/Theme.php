<?php

namespace app\api\model;

use think\Model;

class Theme extends Model
{
    protected $hidden=['topic_img_id','delete_time','head_img_id','update_time'];

    public function topicImg(){
        return $this->belongsTo('Image','topic_img_id','id');
    }

    public function headImg(){
        return $this->belongsTo('Image','head_img_id','id');
    }
}
