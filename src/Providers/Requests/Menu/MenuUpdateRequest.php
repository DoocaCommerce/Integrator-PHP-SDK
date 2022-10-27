<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Menu;

class MenuUpdateRequest extends MenuCreateRequest
{

    public function getMethod(): string
    {
        return 'PUT';
    }
}
