<?php

namespace Heystack\Subsystem\Core\Test;

use Heystack\Subsystem\Core\Storage\StorableInterface;
use Heystack\Subsystem\Core\Storage\Traits\ParentReferenceTrait;

class TestDataObjectStorable extends\DataObject implements StorableInterface
{

    use ParentReferenceTrait;

    public function write()
    {
        return 'done';

    }

    public function getSchemaName()
    {
        return 'test';

    }

    public function getStorableBackendIdentifiers()
    {
        return [
            'test'
        ];

    }

    public function getStorableData()
    {
        return [
            'data' => [
                'hello' => 'hello',
                'hello1' => 'hello',
                'hello2' => 'hello',
                'hello3' => 'hello'
            ]
        ];

    }

    public function getStorableIdentifier()
    {
        return 'test';

    }

}
