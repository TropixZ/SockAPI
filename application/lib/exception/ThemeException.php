<?php
/**
 * Created by PhpStorm.
 * User: 无言独樽
 * Date: 2019/1/8
 * Time: 0:57
 */

namespace app\lib\exception;


class ThemeException extends BaseException
{
    public $code="404";
    public $msg="指定id不存在，请检查";
    public $errorCode="30000";
}