<?php

namespace GetThingsDone\Vision\Clients;

use Illuminate\Support\Facades\Http;

class GoogleClient
{
    public function recognize(string $image)
    {
        return Http::post(
            "https://vision.googleapis.com/v1/images:annotate?key=".config('vision.key'),
            [
                'requests' => [
                    [
                        'image' => ['content' => $image],
                        'features' => [
                            [
                              'maxResults' => 10,
                              'type' => "FACE_DETECTION",
                            ],
                        ],
                    ],
                ],
            ]
        );
    }
}
