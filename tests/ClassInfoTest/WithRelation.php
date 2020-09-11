<?php

namespace SilverStripe\Core\Tests\ClassInfoTest;

if (!class_exists(NoFields::class)) {
    return;
}

class WithRelation extends NoFields
{
    private static $table_name = 'ClassInfoTest_WithRelation';

    private static $has_one = [
        'Relation' => HasFields::class
    ];
}
