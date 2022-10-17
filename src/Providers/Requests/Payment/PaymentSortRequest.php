<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Payment;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class PaymentSortRequest implements Request
{
    protected ?array $data;

    public function __construct(?array $data = [])
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return [
            'data' => $this->data
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/payment-sort';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
