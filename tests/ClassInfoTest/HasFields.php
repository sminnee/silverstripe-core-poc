<?php

namespace SilverStripe\Core\Tests\ClassInfoTest;

if (!class_exists(NoFields::class)) {
    return;
}

class HasFields extends NoFields
{
    private static $table_name = 'ClassInfoTest_HasFields';

    private static $db = [
        'Description' => 'Varchar'
    ];
}
