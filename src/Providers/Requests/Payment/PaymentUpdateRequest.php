<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Payment;

class PaymentUpdateRequest extends PaymentCreateRequest
{
    public function getMethod(): string
    {
        return 'PUT';
    }
}
