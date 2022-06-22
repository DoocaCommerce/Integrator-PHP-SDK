<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Stock;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class StockDeleteRequest implements Request
{
    public function __construct(
        int $id
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id
        ];
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

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'delete'
        ];
    }
}