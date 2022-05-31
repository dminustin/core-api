<?php

declare(strict_types=1);

namespace Jera\CoreApi\Transport;

use Jera\CoreApi\Exceptions\JeraBaseException;
use Jera\CoreApi\Exceptions\JeraEmptyResponseException;
use Jera\CoreApi\Exceptions\JeraErrorResponseException;
use Jera\CoreApi\Models\JeraRequestModel;
use Jera\CoreApi\Models\JeraResponseModel;

class JeraHTTPTransport implements JeraTransportInterface
{
    protected string $apiURL;
    protected string $apiToken;

    public function __construct(string $apiURL, string $apiToken)
    {
        $this->apiURL = $apiURL;
        $this->apiToken = $apiToken;
    }

    public function sendRequest(JeraRequestModel $request): JeraResponseModel
    {
        $context = stream_context_create([
            'http' => [
                'method' => "POST",
                'header' =>
                    "Content-Type: application/json\r\n" .
                    "Token: " . $this->apiToken,
                'content' => $request,
                'timeout' => 60
            ]
        ]);

        try {
            $result = file_get_contents($this->apiURL, false, $context);
        } catch (\Exception $e) {
            throw new JeraBaseException($e->getMessage());
        }

        if (empty($result)) {
            throw new JeraEmptyResponseException();
        }

        try {
            $json = json_decode($result);
        } catch (\Exception $e) {
            //do nothing here
        }

        if (empty($result) || !isset($result['result'])) {
            throw new JeraEmptyResponseException('Not a JSON');
        }

        if (!$data['result']) {
            throw new JeraErrorResponseException('API Returns Error');
        }

        return (new JeraResponseModel())
            ->setData($result['data'])
            ->setCommands($result['commands'])
            ->setResult($result['result']);
    }
}
