<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Page;

class PageUpdateRequest extends PageCreateRequest
{

    public function toArray(): array
    {
        return $this->data;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }
}
