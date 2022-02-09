<?php

namespace app\core;

use Exception;

class Request
{
    private string|null $url;

    public function __construct()
    {
        $this->url = $_GET["url"] ?? null;
    }

    public function getUrl(): string|null
    {
        return $this->url;
    }

    public function getMethod()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function get(string $key): string
    {
        $body = $this->getBody();

        $body[$key] ?? throw new Exception("Error \"$key\" not found in REQUEST data");

        return $body[$key];
    }

    private function getBody(): array
    {
        $body = match ($this->getMethod()) {
            "post" => $_POST,
            "get" => $_GET
        };

        return $body;
    }
}
