<?php

namespace xiaodi\JWTAuth\Exception;

use think\exception\HttpException;

/**
 * 验证异常.
 */
class JWTException extends HttpException
{
    public function __construct(string $message, $statusCode = 500, $code = 0)
    {
        parent::__construct($statusCode, $message, null, [], $code);
    }
}
