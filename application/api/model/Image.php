<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    protected $hidden=['id','delete_time','update_time','from'];
}
