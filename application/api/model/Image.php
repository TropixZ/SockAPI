<?php

namespace app\api\model;



class Image extends BaseModel
{
    protected $hidden=['id','delete_time','update_time','from'];

    public function getUrlAttr($value,$data){
        return $this->prefixImgUrl($value,$data);
    }

}
