<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Stock;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class StockCreateRequest implements Request
{
    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/stock';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
