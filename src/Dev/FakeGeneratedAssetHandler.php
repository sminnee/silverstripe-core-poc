<?php

namespace SilverStripe\Core\Dev;

use SilverStripe\Assets\Storage\GeneratedAssetHandler;

/**
 * A simple fake implementation of GeneratedAssetHandler.
 * It saves content to memory and returns http://example.org/generated-assets/(filename) for URLs
 */
class FakeGeneratedAssetHandler implements GeneratedAssetHandler
{

    private $content = [];
    private $baseURL = [];

    /**
     * Create a new object
     * @param $baseURL The prefix of generated URLs. Should end in '/'.
     */
    public function __construct(string $baseURL)
    {
        $this->baseURL = $baseURL;
    }

    public function getContentURL($filename, $callback = null)
    {
        $this->getContent($filename, $callback);

        return $this->baseURL . $filename;
    }

    /**
     * Returns the content for a generated asset, if one is available.
     *
     * Given a filename, determine if a file is available. If the file is unavailable,
     * and a callback is supplied, invoke it to regenerate the content.
     *
     * @param string $filename
     * @param callable $callback To generate content. If none provided, content will only be returned
     * if there is valid content.
     * @return string Content for this generated file
     */
    public function getContent($filename, $callback = null)
    {
        if (isset($this->content[$filename])) {
            return $this->content[$filename];
        } elseif ($callback) {
            return $this->content[$filename] = $callback();
        }

        return null;
    }

    /**
     * Update content with new value
     *
     * @param string $filename
     * @param string $content Content to write to the backend
     */
    public function setContent($filename, $content)
    {
        $this->content[$filename] = $content;
    }

    /**
     * Remove any content under the given file.
     *
     * If $filename is a folder, it should delete all files underneath it also.
     *
     * @param string $filename
     */
    public function removeContent($filename)
    {
        unset($this->content[$filename]);
    }
}
