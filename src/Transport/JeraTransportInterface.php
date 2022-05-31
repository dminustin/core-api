<?php

declare(strict_types=1);

namespace Jera\CoreApi\Transport;

use Jera\CoreApi\Models\JeraRequestModel;
use Jera\CoreApi\Models\JeraResponseModel;

interface JeraTransportInterface
{
    public function sendRequest(JeraRequestModel $request): JeraResponseModel;
}
