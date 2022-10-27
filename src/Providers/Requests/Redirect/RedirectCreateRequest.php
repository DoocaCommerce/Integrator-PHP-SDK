<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Redirect;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class RedirectCreateRequest implements Request
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/redirect';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
