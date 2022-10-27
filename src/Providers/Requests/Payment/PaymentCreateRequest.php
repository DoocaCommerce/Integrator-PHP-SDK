<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Payment;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class PaymentCreateRequest implements Request
{
    public function __construct(
        $data
    ) {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/payment';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
