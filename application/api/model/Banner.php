<?php
/**
 * Created by PhpStorm.
 * User: 无言独樽
 * Date: 2018/12/28
 * Time: 22:07
 */

namespace app\api\model;


class Banner extends BaseModel
{
    protected $hidden=['id','delete_time','update_time'];

    public static function getBannerByID($id){
        $banner =self::with(['items','items.img'])->find($id);
        return $banner;
    }

    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
}