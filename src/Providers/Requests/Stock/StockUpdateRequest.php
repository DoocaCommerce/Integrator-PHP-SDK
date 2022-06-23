<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Stock;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class StockUpdateRequest implements Request
{
    protected float|int|null $balance;
    protected float|int|null $reserved;
    protected int $variation_id;
    protected ?string $location;

    public function __construct(
        float|int|null $balance,
        float|int|null $reserved,
        int $variation_id,
        ?string $location
    ) {
        $this->balance = $balance;
        $this->reserved = $reserved;
        $this->variation_id = $variation_id;
        $this->location = $location;
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
        return [
            "balance" => $this->balance,
            "reserved" => $this->reserved,
            "variation_id" => $this->variation_id,
            "location" => $this->location
        ];
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'update'
        ];
    }
}