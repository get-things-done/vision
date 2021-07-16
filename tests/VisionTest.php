<?php
namespace GetThingsDone\Vision;

use GetThingsDone\Vision\Tests\TestCase;
use GetThingsDone\Vision\Vision;

class VisionTest extends TestCase
{
    /** @test */
    public function it_should_recognize_face()
    {
        $data = Vision::make()->fromUrl('https://i.ibb.co/py3HJ6R/201134825-354755366007158-8838237883537825367-n-jpg-nc-ht-instagram-fhan3-1-fna-fbcdn.jpg')->recognize();

        $this->assertArrayHasKey(
            'faceAnnotations',
            $data[0]
        );
    }

}
