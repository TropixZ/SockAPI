<?php
/**
 * Created by PhpStorm.
 * User: 无言独樽
 * Date: 2019/1/2
 * Time: 1:58
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    //Http 状态码
    public $code=400;
    //错误具体信息
    public $msg="参数错误";
    //自定义的错误码
    public $errorCode=10000;


}