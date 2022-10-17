<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Payment;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class PaymentCreateRequest implements Request
{
    protected int $id;
    protected ?int $gateway_id;
    protected ?string $external_id;
    protected string $name;
    protected string $method;
    protected ?array $installments;
    protected ?int $max_parcels;
    protected ?int $parcels_no_interest;
    protected ?float $min_parcel_price;
    protected ?float $min_purchase;
    protected ?float $max_purchase;
    protected ?float $billet_min_discount_price;
    protected ?float $markup;
    protected ?int $expire_days;
    protected ?string $soft_descriptor;
    protected ?string $description;
    protected ?string $instructions;
    protected ?bool $active;
    protected ?int $position;
    protected ?bool $is_default;
    protected ?bool $show_only_instore_shipping;
    protected ?string $deleted_at;
    protected ?string $created_at;
    protected ?string $updated_at;

    public function __construct(
        int $id,
        ?int $gateway_id,
        ?string $external_id,
        string $name,
        string $method,
        ?array $installments,
        ?int $max_parcels,
        ?int $parcels_no_interest,
        ?float $min_parcel_price,
        ?float $min_purchase,
        ?float $max_purchase,
        ?float $billet_min_discount_price,
        ?float $markup,
        ?int $expire_days,
        ?string $soft_descriptor,
        ?string $description,
        ?string $instructions,
        ?bool $active,
        ?int $position,
        ?bool $is_default,
        ?bool $show_only_instore_shipping,
        ?string $deleted_at,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->gateway_id = $gateway_id;
        $this->external_id = $external_id;
        $this->name = $name;
        $this->method = $method;
        $this->installments = $installments;
        $this->max_parcels = $max_parcels;
        $this->parcels_no_interest = $parcels_no_interest;
        $this->min_parcel_price = $min_parcel_price;
        $this->min_purchase = $min_purchase;
        $this->max_purchase = $max_purchase;
        $this->billet_min_discount_price = $billet_min_discount_price;
        $this->markup = $markup;
        $this->expire_days = $expire_days;
        $this->soft_descriptor = $soft_descriptor;
        $this->description = $description;
        $this->instructions = $instructions;
        $this->active = $active;
        $this->position = $position;
        $this->is_default = $is_default;
        $this->show_only_instore_shipping = $show_only_instore_shipping;
        $this->deleted_at = $deleted_at;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'gateway_id' => $this->gateway_id,
            'external_id' => $this->external_id,
            'name' => $this->name,
            'method' => $this->method,
            'installments' => $this->installments,
            'max_parcels' => $this->max_parcels,
            'parcels_no_interest' => $this->parcels_no_interest,
            'min_parcel_price' => $this->min_parcel_price,
            'min_purchase' => $this->min_purchase,
            'max_purchase' => $this->max_purchase,
            'billet_min_discount_price' => $this->billet_min_discount_price,
            'markup' => (float) $this->markup,
            'expire_days' => $this->expire_days,
            'soft_descriptor' => $this->soft_descriptor,
            'description' => $this->description,
            'instructions' => $this->instructions,
            'active' => (bool) $this->active,
            'position' => $this->position,
            'is_default' =>  (bool) $this->is_default,
            'show_only_instore_shipping' => $this->show_only_instore_shipping,
            'deleted_at' => (string) $this->deleted_at,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/payment';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
