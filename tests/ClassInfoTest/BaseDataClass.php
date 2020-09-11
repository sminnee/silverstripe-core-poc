<?php

namespace SilverStripe\Core\Tests\ClassInfoTest;

use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\DataObject;

if (!class_exists(DataObject::class)) {
    return;
}

class BaseDataClass extends DataObject implements TestOnly
{
    private static $table_name = 'ClassInfoTest_BaseDataClass';

    private static $db = [
        'Title' => 'Varchar'
    ];
}
