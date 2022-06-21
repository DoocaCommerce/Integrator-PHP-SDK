<?php

namespace DoocaCommerce\Integrator\Providers\Requests\LandingPage;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class LandingPageDeleteRequest implements Request
{
    public function __construct(
        protected int $id
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/landing-pages';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'delete'
        ];
    }
}