<?php

namespace SilverStripe\i18n\Tests\i18nTest;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\ORM\DataObject;
use SilverStripe\Dev\TestOnly;
use SilverStripe\i18n\i18nEntityProvider;
use SilverStripe\Security\Group;

class MyObject implements TestOnly, i18nEntityProvider
{
    private static $table_name = 'i18nTest_MyObject';

    private static $db = [
        'FirstProperty' => 'Varchar',
        'SecondProperty' => 'Int'
    ];

    private static $has_many = [
        'Relation' => Group::class
    ];

    private static $singular_name = "My Object";

    private static $plural_name = "My Objects";

    public function provideI18nEntities()
    {
        $entities = [];
        return array_merge($entities, [
            LeftAndMain::class . '.OTHER_TITLE' => [
                'default' => 'Other title',
                'module' => 'admin',
            ],
        ]);
    }
}
