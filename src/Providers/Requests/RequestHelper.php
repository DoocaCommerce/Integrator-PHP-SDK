<?php

namespace DoocaCommerce\Integrator\Providers\Requests;

class RequestHelper
{
    static function checkMethod(&$data, string $method)
    {
        if (isset($data['active']) && $data['active'] === false) {
            $data = [
                'id' => $data['id']
            ];

            if ($method === 'POST') {
                $data = [];
            }

            dd(133223);

            return 'DELETE';
        }

        return $method;
    }
}
