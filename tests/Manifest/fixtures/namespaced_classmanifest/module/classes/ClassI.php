<?php
/** @skipUpgrade */
namespace SilverStripe\Framework\Tests;

//whitespace here is important for tests, please don't change it
/** @skipUpgrade */
use SilverStripe\Core\CoreKernel;
/** @skipUpgrade */
use SilverStripe\Control\Controller  as  Cont ;
/** @skipUpgrade */
use SilverStripe\Control\HTTPRequest as Request, SilverStripe\Control\HTTPResponse as Response, SilverStripe\View\Parsers\FilterInterface as F;
/** @skipUpgrade */
use silverstripe\test\ClassA;
/** @skipUpgrade */
use \SilverStripe\Core\ClassInfo;

/** @skipUpgrade */
class ClassI extends CoreKernel implements F {
    public function filter($input) {

    }
}
