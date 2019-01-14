<?php
namespace app\lib\exception;

class UserException extends BaseException
{
    public $code = 404;
    public $msg = '用户收获地址不存在';
    public $errorCode = 60001;
}