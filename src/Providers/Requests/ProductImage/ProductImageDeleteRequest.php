<?php

namespace DoocaCommerce\Integrator\Providers\Requests\ProductImage;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ProductImageDeleteRequest implements Request
{
    protected int $product_id;
    protected int $image_id;

    public function __construct(
        int $product_id,
        int $image_id
    ) {
        $this->product_id = $product_id;
        $this->image_id = $image_id;
    }

    public function toArray(): array
    {
        return [
            'product_id' => $this->id,
            'id' => $this->id,
        ];
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getPath(): string
    {
        return 'integrator/import/product-image';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
