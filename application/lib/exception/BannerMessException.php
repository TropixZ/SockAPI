<?php
/**
 * Created by PhpStorm.
 * User: 无言独樽
 * Date: 2018/12/29
 * Time: 1:28
 */

namespace app\lib\exception;

class BannerMessException extends BaseException
{
    public $code=404;
    public $msg="请求的banner参数不存在";
    public $errorCode=10000;
}