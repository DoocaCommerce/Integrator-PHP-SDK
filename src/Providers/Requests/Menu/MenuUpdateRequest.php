<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Menu;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class MenuUpdateRequest implements Request
{
    protected ?int $id;
    protected ?string $name;
    protected ?string $handle = null;
    protected ?array $values = null;

    public function __construct(
        int $id,
        ?string $name,
        ?string $handle = null,
        ?array $values = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->handle = $handle;
        $this->values = $values;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'handle' => $this->handle,
            'values' => $this->values
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/menu';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}