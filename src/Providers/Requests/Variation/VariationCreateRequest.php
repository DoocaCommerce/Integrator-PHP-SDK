<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Variation;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class VariationCreateRequest implements Request
{
    protected $id;
    protected $product_id;
    protected $color_id;
    protected $color_secondary_id;
    protected $attribute_value_id;
    protected $attribute_value_secondary_id;
    protected $external_id;
    protected $reference;
    protected $sku;
    protected $gtin;
    protected $mpn;
    protected $price;
    protected $price_compare;
    protected $cost;
    protected $has_custom_dimentions;
    protected $weight;
    protected $depth;
    protected $width;
    protected $height;
    protected $additional_shipping_time;
    protected $images;
    protected $position;
    protected $created_at;
    protected $updated_at;
    protected $active;
    protected $balance;
    protected $reserved_balance;
    protected $color;
    protected $attribute;
    protected $attribute_secondary;

    public function __construct(
        $id,
        $product_id,
        $color_id,
        $color_secondary_id,
        $attribute_value_id,
        $attribute_value_secondary_id,
        $external_id,
        $reference,
        $sku,
        $gtin,
        $mpn,
        $price,
        $price_compare,
        $cost,
        $has_custom_dimentions,
        $weight,
        $depth,
        $width,
        $height,
        $additional_shipping_time,
        $images,
        $position,
        $created_at,
        $updated_at,
        $active,
        $balance,
        $reserved_balance,
        $color,
        $attribute,
        $attribute_secondary
    ) {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->color_id = $color_id;
        $this->color_secondary_id = $color_secondary_id;
        $this->attribute_value_id = $attribute_value_id;
        $this->attribute_value_secondary_id = $attribute_value_secondary_id;
        $this->external_id = $external_id;
        $this->reference = $reference;
        $this->sku = $sku;
        $this->gtin = $gtin;
        $this->mpn = $mpn;
        $this->price = $price;
        $this->price_compare = $price_compare;
        $this->cost = $cost;
        $this->has_custom_dimentions = $has_custom_dimentions;
        $this->weight = $weight;
        $this->depth = $depth;
        $this->width = $width;
        $this->height = $height;
        $this->additional_shipping_time = $additional_shipping_time;
        $this->images = $images;
        $this->position = $position;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->active = $active;
        $this->balance = $balance;
        $this->reserved_balance = $reserved_balance;
        $this->color = $color;
        $this->attribute = $attribute;
        $this->attribute_secondary = $attribute_secondary;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'color_id' => $this->color_id,
            'color_secondary_id' => $this->color_secondary_id,
            'attribute_value_id' => $this->attribute_value_id,
            'attribute_value_secondary_id' => $this->attribute_value_secondary_id,
            'external_id' => $this->external_id,
            'reference' => $this->reference,
            'sku' => $this->sku,
            'gtin' => $this->gtin,
            'mpn' => $this->mpn,
            'price' => $this->price,
            'price_compare' => $this->price_compare,
            'cost' => $this->cost,
            'has_custom_dimentions' => $this->has_custom_dimentions,
            'weight' => $this->weight,
            'depth' => $this->depth,
            'width' => $this->width,
            'height' => $this->height,
            'additional_shipping_time' => $this->additional_shipping_time,
            'images' => $this->images,
            'position' => $this->position,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'active' => $this->active,
            'balance' => $this->balance,
            'reserved_balance' => $this->reserved_balance,
            'color' => $this->color,
            'attribute' => $this->attribute,
            'attribute_secondary' => $this->attribute_secondary,
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
}
