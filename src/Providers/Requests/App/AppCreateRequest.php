<?php

namespace DoocaCommerce\Integrator\Providers\Requests\App;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class AppCreateRequest implements Request
{
    protected $id;
    protected $content;
    protected $created_at;
    protected $updated_at;
    protected $name;
    protected $slug;
    protected $type;

    public function __construct(
        $id,
        $content,
        $created_at,
        $updated_at,
        $name,
        $slug,
        $type
    ) {
        $this->id = $id;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->name = $name;
        $this->slug = $slug;
        $this->type = $type;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "content" => $this->content,
            "name" => $this->name,
            "slug" => $this->slug,
            "type" => $this->type,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/app';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }
}
