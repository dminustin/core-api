<?php

declare(strict_types=1);

namespace Jera\CoreApi\Exceptions;

class JeraErrorResponseException extends JeraBaseException
{
    protected $message = 'Error response';
}
