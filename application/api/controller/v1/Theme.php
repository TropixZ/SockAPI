<?php

namespace app\api\controller\v1;

use app\api\validate\IDCollection;
use app\lib\exception\ThemeException;
use think\Controller;
use app\api\model\Theme as ThemeModel;

//专题控制器
class Theme extends Controller
{
    public function getSimpleList($ids=''){
        (new IDCollection())->goCheck();
        $ids=explode(',',$ids);
        $result=ThemeModel::with('topicImg,headImg')->select($ids);

        if (!$result){
            throw new ThemeException();
        }

        return $result;
    }

    public function getComplexOne($id){
        echo 123;
    }
}
