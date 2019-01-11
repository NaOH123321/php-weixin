<?php

namespace app\lib\exception;


class CategoryException extends BaseException
{
    public $code = 404;
    public $msg = '指定类目不存在，请检查类目ID';
    public $errorCode = 50000;
}