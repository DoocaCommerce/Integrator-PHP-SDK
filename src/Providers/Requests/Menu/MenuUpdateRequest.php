<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Menu;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class MenuUpdateRequest implements Request
{
    protected ?int $id;
    protected ?string $name;
    protected ?string $handle = null;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;
    protected ?array $values = null;

    public function __construct(
        int $id,
        ?string $name,
        ?string $handle = null,
        ?array $values = null,
        ?string $created_at = null,
        ?string $updated_at = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->handle = $handle;
        $this->values = $values;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'handle' => $this->handle,
            'values' => $this->values,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
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
