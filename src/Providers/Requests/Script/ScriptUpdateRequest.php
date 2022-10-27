<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Script;

class ScriptUpdateRequest extends ScriptCreateRequest
{

    public function getMethod(): string
    {
        return 'PUT';
    }
}
