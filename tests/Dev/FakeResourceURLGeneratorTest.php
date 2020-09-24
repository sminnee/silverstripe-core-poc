<?php

namespace SilverStripe\Core\Tests\Dev;

use SilverStripe\Core\Dev\FakeResourceURLGenerator;
use SilverStripe\Core\Manifest\Module;
use SilverStripe\Core\Manifest\ModuleResource;

class FakeResourceURLGeneratorTest extends \PHPUnit_Framework_TestCase
{
    function testGetURL()
    {
        $f = new FakeResourceURLGenerator('http://www.example.org/');

        // Test with a string argument
        $this->assertEquals('http://www.example.org/images/hello.jpg', $f->urlForResource('images/hello.jpg'));

        // Test with stub module with a resource
        $module = new Module('/var/www/vendor/silverstripe/core', '/var/www/');
        $moduleResource = new ModuleResource($module, 'images/world.jpg');
        $this->assertEquals(
            'http://www.example.org/vendor/silverstripe/core/images/world.jpg',
            $f->urlForResource($moduleResource)
        );
    }
}
