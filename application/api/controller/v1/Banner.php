<?php
namespace app\api\controller\v1;
use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMessException;



class Banner
{
    public function getBanner($id)
    {
        (new IDMustBePostiveInt())->goCheck();
        $banner=BannerModel::getBannerByID($id);
        //$banner->hidden(['delete_time','update_time']);
        if(!$banner){
            throw new BannerMessException();
        }
        return $banner;
    }
}
