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
        string $baseUri
    ) {
        $this->client = new Client(
            [
            'headers' => [
                'Content-Type' => 'application/json',
                'dc-source' => 'api'
            ],
            'base_uri' => $baseUri,
        ]);

        $this->token = $token;
    }

    public static function create(string $token, string $baseUri): self
    {
        return new self($token, $baseUri);
    }

    public function send(Request $request): Response
    {
        $header = $request->getHeader();
        $header['authorization'] = 'Bearer ' . $this->token;

        $response = $this->client->request(
            method: $request->getMethod(),
            uri: $request->getPath(),
            options: [
                'body' => json_encode($request->getBody()),
                'headers' => $header,
            ],
        );

        return Response::from($response);
    }
}
