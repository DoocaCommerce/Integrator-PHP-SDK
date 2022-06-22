<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Section;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class SectionCreateRequest implements Request
{
    public function __construct(
        protected int $id,
        protected ?int $theme_id,
        protected ?string $version_id,
        protected ?string $type,
        protected ?string $page = null,
        protected ?string $data,
        protected ?string $created_at,
        protected ?string $updated_at
    ) {}

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "theme_id" => $this->theme_id,
            "version_id" => $this->version_id,
            "type" => $this->type,
            "page" => $this->page,
            "data" => $this->data,
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
        return 'integrator/import/section';
    }

    public function getBody(): array
    {
        return $this->toArray();
    }

    public function getHeader(): array
    {
        return [
            'dc-action'  => 'insert'
        ];
    }
}