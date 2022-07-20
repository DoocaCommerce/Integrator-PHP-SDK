<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Group;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class GroupCreateRequest implements Request
{
    protected ?int $id;
    protected string $name;
    protected ?string $slug;
    protected ?string $description;
    protected ?string $created_at = null;
    protected ?string $updated_at = null;

    public function __construct(
        int $id,
        string $name,
        ?string $slug = null,
        ?string $description = null,
        ?string $created_at = null,
        ?string $updated_at = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
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