<?php

namespace SilverStripe\Core\Tests\Dev;

use SilverStripe\Core\Dev\FakeGeneratedAssetHandler;

class FakeGeneratedAssetHandlerTest extends \PHPUnit_Framework_TestCase
{
    function testSetAndGetContent()
    {
        $f = new FakeGeneratedAssetHandler('/');

        // setContent() populates the result for getContent()
        $f->setContent('test.txt', 'hello world');
        $this->assertEquals('hello world', $f->getContent('test.txt'));

        // If no content set, null is returned
        $this->assertNull($f->getContent('test2.txt'));

        // If content is removed, getContent() now returns null
        $f->removeContent('test.txt');
        $this->assertNull($f->getContent('test.txt'));
    }

    function testGenerateContent()
    {
        $f = new FakeGeneratedAssetHandler('/');

        // A generator callback will create content
        $this->assertNull($f->getContent('test.txt'));
        $this->assertEquals(
            'hello world',
            $f->getContent(
                'test.txt',
                function () {
                    return 'hello world';
                }
            )
        );
    }

    function testGenerateContentUrl()
    {
        $f = new FakeGeneratedAssetHandler('http://www.example.org/assets/');

        // Without content, no URL is returned
        $this->assertNull($f->getContent('test.txt'));

        // With a generator, content is returned
        $this->assertEquals(
            'http://www.example.org/assets/test.txt',
            $f->getContentURL(
                'test.txt',
                function () {
                    return 'hello world';
                }
            )
        );

        // The generator persists ther result
        $this->assertEquals('hello world', $f->getContent('test.txt'));

        // Pre-set content also returns a URL
        $f->setContent('test3.txt', 'hello world');
        $this->assertEquals('http://www.example.org/assets/test3.txt', $f->getContentURL('test3.txt'));
    }
}
