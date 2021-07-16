<?php

namespace GetThingsDone\Vision;

use GetThingsDone\Vision\Clients\GoogleClient;

class Vision
{
    protected $client;

    protected $image;

    public function __construct()
    {
        $this->client = new GoogleClient;
    }

    public static function make()
    {
        return new self();
    }

    public function fromUrl(string $url)
    {
        $this->image = base64_encode(file_get_contents($url));
        return $this;
    }

    public function recognize()
    {
        return $this->client->recognize($this->image)['responses'] ?? [];
    }
}
