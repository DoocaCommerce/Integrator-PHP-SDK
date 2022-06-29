<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Menu;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class MenuUpdateRequest implements Request
{
    protected ?int $id;
    protected string $name;
    protected ?string $handle = null;

    public function __construct(
        int $id,
        string $name,
        ?string $handle = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->handle = $handle;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'handle' => $this->handle
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/menu';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'update'
        ];
    }
}