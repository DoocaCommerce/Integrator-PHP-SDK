<?php

namespace DoocaCommerce\Integrator\Providers\Responses;

use Psr\Http\Message\ResponseInterface;

class Response
{
    /**
     * @var ResponseInterface
     */
    public $data;

    public function __construct(
        ResponseInterface $response
    ) {
        $this->data = $response->getBody();
    }

    public static function from(ResponseInterface $response): self
    {
        return new self($response);
    }
}
