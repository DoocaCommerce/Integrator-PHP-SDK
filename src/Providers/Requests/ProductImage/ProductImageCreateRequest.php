<?php

namespace DoocaCommerce\Integrator\Providers\Requests\ProductImage;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ProductImageCreateRequest implements Request
{
    protected int $id;
    protected int $product_id;
    protected string $src;
    protected ?string $alt = null;
    protected ?string $position = null;
    protected ?array $color_ids = [];

    public function __construct(
        $id,
        $product_id,
        $src,
        $alt,
        $position,
        $color_ids
    ) {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->src = $src;
        $this->alt = $alt;
        $this->position = $position;
        $this->color_ids = $color_ids;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/product-image';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'src' => $this->src,
            'alt' => $this->alt,
            'position' => $this->position,
            'color_ids' => $this->color_ids,
        ];
    }
}
