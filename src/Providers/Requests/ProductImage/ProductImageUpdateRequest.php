<?php

namespace DoocaCommerce\Integrator\Providers\Requests\ProductImage;

class ProductImageUpdateRequest extends ProductImageCreateRequest
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
        return 'PUT';
    }
}
