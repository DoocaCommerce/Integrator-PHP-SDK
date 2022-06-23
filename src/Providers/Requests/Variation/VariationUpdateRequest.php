<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Variation;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class VariationUpdateRequest implements Request
{
    protected ?int $id;
    protected ?int $product_id;
    protected ?int $color_id = null;
    protected ?int $color_secondary_id = null;
    protected ?int $attribute_value_id = null;
    protected ?int $attribute_value_secondary_id = null;
    protected ?string $external_id = null;
    protected ?string $grid_id = null;
    protected ?string $reference = null;
    protected ?string $sku = null;
    protected ?string $gtin = null;
    protected ?string $mpn = null;
    protected ?float $price = null;
    protected ?float $price_compare = null;
    protected ?float $price_cost = null;
    protected ?float $special_price = null;
    protected ?float $weight = null;
    protected ?float $depth = null;
    protected ?float $width = null;
    protected ?float $height = null;
    protected ?int $additional_shipping_time = null;
    protected ?int $position = null;
    protected bool $active = true;
    protected ?string $color = null;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    public function __construct(
        int $id,
        ?int $product_id,
        ?int $color_id = null,
        ?int $color_secondary_id = null,
        ?int $attribute_value_id = null,
        ?int $attribute_value_secondary_id = null,
        ?string $external_id = null,
        ?string $grid_id = null,
        ?string $reference = null,
        ?string $sku = null,
        ?string $gtin = null,
        ?string $mpn = null,
        ?float $price = null,
        ?float $price_compare = null,
        ?float $price_cost = null,
        ?float $special_price = null,
        ?float $weight = null,
        ?float $depth = null,
        ?float $width = null,
        ?float $height = null,
        ?int $additional_shipping_time = null,
        ?int $position = null,
        bool $active = true,
        ?string $color = null,
        ?string $created_at = null,
        ?string $updated_at = null
    ) {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->color_id = $color_id;
        $this->color_secondary_id = $color_secondary_id;
        $this->attribute_value_id = $attribute_value_id;
        $this->attribute_value_secondary_id = $attribute_value_secondary_id;
        $this->external_id = $external_id;
        $this->grid_id = $grid_id;
        $this->reference = $reference;
        $this->sku = $sku;
        $this->gtin = $gtin;
        $this->mpn = $mpn;
        $this->price = $price;
        $this->price_compare = $price_compare;
        $this->price_cost = $price_cost;
        $this->special_price = $special_price;
        $this->weight = $weight;
        $this->depth = $depth;
        $this->width = $width;
        $this->height = $height;
        $this->additional_shipping_time = $additional_shipping_time;
        $this->position = $position;
        $this->active = $active;
        $this->color = $color;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            'product_id' => $this->product_id,
            'color_id' => $this->color_id,
            'color_secondary_id' => $this->color_secondary_id,
            'attribute_value_id' => $this->attribute_value_id,
            'attribute_value_secondary_id' => $this->attribute_value_secondary_id,
            'external_id' => $this->external_id,
            'grid_id' => $this->grid_id,
            'reference' => $this->reference,
            'sku' => $this->sku,
            'gtin' => $this->gtin,
            'mpn' => $this->mpn,
            'price' => $this->price,
            'price_compare' => $this->price_compare,
            'cost' => $this->price_cost,
            'special_price' => $this->special_price,
            'weight' => $this->weight,
            'depth' => $this->depth,
            'width' => $this->width,
            'height' => $this->height,
            'additional_shipping_time' => $this->additional_shipping_time,
            'position' => $this->position,
            'active' => $this->active,
            'color' => $this->color,
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
        return 'integrator/import/variation';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'update'
        ];
    }
}