<?php

namespace GetThingsDone\Vision;

use GetThingsDone\Vision\Clients\GoogleClient;
use GetThingsDone\Vision\Tests\TestCase;

class GoogleClientTest extends TestCase
{
    /** @test */
    public function it_should_recognize_face()
    {
        $image = base64_encode(file_get_contents('https://i.ibb.co/py3HJ6R/201134825-354755366007158-8838237883537825367-n-jpg-nc-ht-instagram-fhan3-1-fna-fbcdn.jpg'));
        $this->assertArrayHasKey(
            'responses',
            (new GoogleClient())->recognize($image)
        );
    }
}
