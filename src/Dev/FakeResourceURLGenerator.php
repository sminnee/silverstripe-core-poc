<?php

namespace SilverStripe\Core\Dev;

use InvalidArgumentException;
use SilverStripe\Core\Manifest\ModuleResource;
use SilverStripe\Core\Manifest\ResourceURLGenerator;

/**
 * Fake implementation of ResourceURLGenerator that as a given prefix to all file paths
 */
class FakeResourceURLGenerator implements ResourceURLGenerator
{
    private $baseURL = [];

    /**
     * Create a new object
     * @param $baseURL The prefix of generated URLs. Should end in '/'.
     */
    public function __construct(string $baseURL)
    {
        $this->baseURL = $baseURL;
    }

    /**
     * Return the URL for a given resource within the project.
     *
     * As well as returning the URL, this method may also perform any changes needed to ensure that this
     * URL will resolve, for example, by copying files to another location
     *
     * @param string|ModuleResource $resource File or directory path relative to BASE_PATH, or ModuleResource instance
     * @return string URL, either domain-relative (starting with /) or absolute
     * @throws InvalidArgumentException If the resource doesn't exist or can't be sent to the browser
     */
    public function urlForResource($resource)
    {
        if (is_string($resource)) {
            $relPath = $resource;
        } elseif ($resource instanceof ModuleResource) {
            $relPath = $resource->getRelativePath();
        } else {
            throw new InvalidArgumentException("urlForResource() must be passed a string or a ModuleResource");
        }

        return $this->baseURL . $relPath;
    }
}
