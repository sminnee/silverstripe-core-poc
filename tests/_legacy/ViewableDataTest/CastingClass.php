<?php

namespace SilverStripe\Core\Tests\ViewableDataTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\View\ViewableData;

class CastingClass extends ViewableData implements TestOnly
{
    private static $casting = [
        'Field' => 'CastingType',
        'Argument' => 'ArgumentType(Argument)',
        'ArrayArgument' => 'ArrayArgumentType([foo, bar])'
    ];
}
