<?php

namespace SilverStripe\Core\Tests\ClassInfoTest;

if (!class_exists(BaseDataClass::class)) {
    return;
}

class NoFields extends BaseDataClass
{
    private static $table_name = 'ClassInfoTest_NoFields';
}
