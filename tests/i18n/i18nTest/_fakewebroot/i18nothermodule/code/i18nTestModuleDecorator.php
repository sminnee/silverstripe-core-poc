<?php

use SilverStripe\ORM\DataExtension;

if (!class_exists(DataExtension::class)) {
    return;
}

class i18nTestModuleExtension extends DataExtension
{

    public static $db = [
        'MyExtraField' => 'Varchar'
    ];
}
