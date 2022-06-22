<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Section;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class SectionUpdateRequest implements Request
{
    protected int $id;
    protected ?int $theme_id;
    protected ?string $version_id;
    protected ?string $type;
    protected ?string $page = null;
    protected ?string $data;
    protected ?string $created_at;
    protected ?string $updated_a;

    public function __construct(
        int $id,
        ?int $theme_id,
        ?string $version_id,
        ?string $type,
        ?string $page = null,
        ?string $data,
        ?string $created_at,
        ?string $updated_at
    ) {
        $this->id = $id;
        $this->theme_id = $theme_id;
        $this->version_id = $version_id;
        $this->type = $type;
        $this->page = $page;
        $this->data = $data;
        $this->created_at = $created_at;
        $this->updated_a = $updated_at;
    }

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
            'dc-action'  => 'update'
        ];
    }
}