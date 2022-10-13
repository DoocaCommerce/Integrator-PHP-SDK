<?php

namespace DoocaCommerce\Integrator\Providers\Requests\CustomerGroup;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class CustomerGroupUpdateRequest implements Request
{
    protected int $id;
    protected string $name;
    protected int $markup = 1;
    protected ?float $min_purchase = null;
    protected ?float $min_quantity = null;
    protected bool $is_default;
    protected bool $is_selectable;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    public function __construct(
        int $id,
        string $name,
        int $markup = 1,
        ?float $min_purchase = null,
        ?float $min_quantity = null,
        bool $is_default,
        bool $is_selectable,
        ?string $created_at = null,
        ?string $updated_at = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->markup = $markup;
        $this->min_purchase = $min_purchase;
        $this->min_quantity = $min_quantity;
        $this->is_default = $is_default;
        $this->is_selectable = $is_selectable;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'markup' => $this->markup,
            'min_purchase' => $this->min_purchase,
            'min_quantity' => $this->min_quantity,
            'is_default' => $this->is_default,
            'is_selectable' => $this->is_selectable,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/customer-group';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
