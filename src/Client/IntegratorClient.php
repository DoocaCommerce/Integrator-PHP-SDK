<?php

namespace DoocaCommerce\Integrator\Client;

use DoocaCommerce\Integrator\Providers\Requests\Request;
use DoocaCommerce\Integrator\Providers\Responses\Response;
use GuzzleHttp\Client;

class IntegratorClient
{
    private Client $client;
    private string $token;

    public function __construct(
        string $token,
        string $baseUri,
        string $domain
    ) {
        $this->client = new Client(
            [
            'headers' => [
                'Content-Type' => 'application/json',
                'dc-source' => 'api',
                'dc-domain' => $domain
            ],
            'base_uri' => $baseUri,
        ]);

        $this->token = $token;
    }

    public static function create(string $token, string $baseUri, string $domain): self
    {
        return new self($token, $baseUri, $domain);
    }

    public function send(Request $request): Response
    {
        $header = ['authorization' => 'Bearer ' . $this->token];
        
        $response = $this->client->request(
            $request->getMethod(),
            $request->getPath(),
            [
                'body' => json_encode($request->getBody()),
                'headers' => $header,
            ],
        );

        return Response::from($response);
    }
}
