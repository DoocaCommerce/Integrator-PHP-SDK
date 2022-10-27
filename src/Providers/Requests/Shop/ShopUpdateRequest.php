<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Shop;

class ShopUpdateRequest extends ShopCreateRequest
{

    public function getMethod(): string
    {
        return 'PUT';
    }
}
