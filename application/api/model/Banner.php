<?php
/**
 * Created by PhpStorm.
 * User: 无言独樽
 * Date: 2018/12/28
 * Time: 22:07
 */

namespace app\api\model;


use think\Db;
use think\Model;

class Banner extends Model
{
    protected $hidden=['id','delete_time','update_time'];

    public static function getBannerByID($id){
        $banner =self::with(['items','items.img'])->find($id);
        return $banner;
        //根据id获取banner信息
//        $result=Db::query("select * from banner_item where banner_id=?",[$id]);
//        return $result;
    }

    public function items(){
        return $this->hasMany('BannerItem','banner_id','id');
    }
}