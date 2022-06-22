<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Script;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ScriptUpdateRequest implements Request
{
    public function __construct(
        protected int $id,
        protected string  $name,
        protected ?string $description = null,
        protected string  $location,
        protected string  $page,
        protected ?string $load_method,
        protected ?string $url = null,
        protected ?string $content = null,
        protected string  $category,
        protected ?int    $position = null,
        protected bool    $active = true,
        protected ?string $created_at,
        protected ?string $updated_at
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "location" => $this->location,
            "page" => $this->page,
            "load_method" => $this->load_method,
            "url" => $this->url,
            "content" => $this->content,
            "category" => $this->category,
            "position" => $this->position,
            "active" => $this->active,
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
        return 'integrator/import/script';
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