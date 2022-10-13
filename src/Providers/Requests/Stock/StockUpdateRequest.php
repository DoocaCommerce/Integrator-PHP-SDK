<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Stock;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class StockUpdateRequest implements Request
{
    protected int $variation_id;
    protected int $balance;

    public function __construct(
        int $variation_id,
        int $balance
    ) {
        $this->variation_id = $variation_id;
        $this->balance = $balance;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/stock';
    }

    public function getBody(): array
    {
        return [
            "variation_id" => $this->variation_id,
            "balance" => $this->balance,
        ];
    }
}
