<?php

namespace DoocaCommerce\Integrator\Providers\Requests\Setting;

use DoocaCommerce\Integrator\Providers\Requests\Request;

class SettingUpdateRequest implements Request
{
    protected int $id;
    protected ?int $theme_id;
    protected ?int $version_id;
    protected ?string $type;
    protected ?string $page = null;
    protected ?string $data;

    public function __construct(
        int $id,
        ?int $theme_id,
        ?int $version_id,
        ?string $type,
        ?string $page = null,
        ?string $data
    ) {
        $this->id = $id;
        $this->theme_id = $theme_id;
        $this->version_id = $version_id;
        $this->type = $type;
        $this->page = $page;
        $this->data = $data;
    }

    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "theme_id" => $this->theme_id,
            "version_id" => $this->version_id,
            "type" => $this->type,
            "page" => $this->page,
            "data" => $this->data
        ];
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getPath(): string
    {
        return 'integrator/import/settings';
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