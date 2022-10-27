<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Variation;

class VariationUpdateRequest extends VariationCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
