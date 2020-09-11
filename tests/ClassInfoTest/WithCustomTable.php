<?php

namespace SilverStripe\Core\Tests\ClassInfoTest;

if (!class_exists(NoFields::class)) {
    return;
}

class WithCustomTable extends NoFields
{
    private static $table_name = 'CITWithCustomTable';
    private static $db = [
        'Description' => 'Text'
    ];
}
