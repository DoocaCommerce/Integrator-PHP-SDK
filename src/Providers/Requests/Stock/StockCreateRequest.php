<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Stock;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class StockCreateRequest implements Request
{
    protected int $id;
    protected float|int|null $balance;
    protected float|int|null $reserved;
    protected int $variation_id;
    protected ?string $location;
    protected ?string $created_at;
    protected ?string $updated_a;

    public function __construct(
        int $id,
        float|int|null $balance,
        float|int|null $reserved,
        int $variation_id,
        ?string $location,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->balance = $balance;
        $this->reserved = $reserved;
        $this->variation_id = $variation_id;
        $this->location = $location;
        $this->created_at = $created_at;
        $this->updated_a = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "balance" => $this->balance,
            "reserved" => $this->reserved,
            "variation_id" => $this->variation_id,
            "location" => $this->location,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
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
            'dc-action'  => 'insert'
        ];
    }
}