<?php

declare(strict_types=1);

namespace Jera\CoreApi\Exceptions;

class JeraEmptyResponseException extends JeraBaseException
{
    protected $message = 'Empty response';
}
