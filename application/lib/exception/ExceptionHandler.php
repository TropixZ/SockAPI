<?php
/**
 * Created by PhpStorm.
 * User: 无言独樽
 * Date: 2018/12/29
 * Time: 1:08
 */

namespace app\lib\exception;

use think\exception\Handle;
use think\Log;
use think\Request;
//全局异常处理
class ExceptionHandler extends Handle
{
    private $code;
    private $msg;
    private $errorCode;
    //需要返回客户端当前请求的URL路径

    //重写render方法
    public function render(\Exception $e){
       if($e instanceof BaseException){
           //如果是自定义的异常
           $this->code=$e->code;
           $this->msg=$e->msg;
           $this->errorCode=$e->errorCode;
       }else{
            if(config('app_debug')){
                //返回框架默认的错误页面
                return parent::render($e);
            }else{
                $this->code=500;
                $this->msg="服务器内部错误,不能告诉你";
                $this->errorCode=999;
                $this->recordErrorLog($e);
            }
       }
       //获取Request的初始化对象
       $request=Request::instance();
       //返回的结果
       $result=[
           'msg'=>$this->msg,
            'error_code'=>$this->errorCode,
           'request_url'=>$request->url(),
       ];
       return json($result,$this->code);
    }

    public function recordErrorLog(\Exception $e){
        Log::init([
            'type'  => 'File',
            'level' => ['error'],
            'path'  => LOG_PATH,
        ]);
        Log::record($e->getMessage(),'error');
    }
}