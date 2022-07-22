<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Script;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class ScriptCreateRequest implements Request
{
    protected int $id;
    protected string  $name;
    protected ?string $description = null;
    protected string  $location;
    protected string  $page;
    protected ?string $load_method;
    protected ?string $url = null;
    protected ?string $content = null;
    protected string  $category;
    protected ?int    $position = null;
    protected bool    $active = true;
    protected ?string $created_at;
    protected ?string $updated_at;

    public function __construct(
        int $id,
        string  $name,
        ?string $description = null,
        string  $location,
        string  $page,
        ?string $load_method,
        ?string $url = null,
        ?string $content = null,
        string  $category,
        ?int    $position = null,
        bool    $active = true,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->location = $location;
        $this->page = $page;
        $this->load_method = $load_method;
        $this->url = $url;
        $this->content = $content;
        $this->category = $category;
        $this->position = $position;
        $this->active = $active;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

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
}