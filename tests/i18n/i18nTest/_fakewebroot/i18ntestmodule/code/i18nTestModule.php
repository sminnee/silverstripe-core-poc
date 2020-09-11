<?php

use SilverStripe\Dev\TestOnly;

class i18nTestModule implements TestOnly
{
    private static $db = [
        'MyField' => 'Varchar',
    ];

    public function myMethod()
    {
        _t(
            'i18nTestModule.ENTITY',
            'Entity with "Double Quotes"',
            'Comment for entity'
        );
    }
}
class i18nTestModule_Addition
{
    public function myAdditionalMethod()
    {
        _t('i18nTestModule.ADDITION', 'Addition');
    }
}
