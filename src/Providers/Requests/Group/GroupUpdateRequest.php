<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Group;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class GroupUpdateRequest implements Request
{
    protected ?int $id;
    protected string $name;
    protected ?string $slug;
    protected ?string $description;

    public function __construct(
        int $id,
        string $name,
        ?string $slug = null,
        ?string $description = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getPath(): string
    {
        return 'integrator/import/group';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}