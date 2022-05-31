<?php

declare(strict_types=1);

namespace Jera\CoreApi\Exceptions;

class JeraBaseException extends \Exception implements \Throwable
{
    protected $code = 0;
    protected $message = 'Base Exception';
}
