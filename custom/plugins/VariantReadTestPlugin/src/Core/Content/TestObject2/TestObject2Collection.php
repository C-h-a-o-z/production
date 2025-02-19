<?php declare(strict_types=1);

namespace VariantReadTestPlugin\Core\Content\TestObject2;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(TestObject2Entity $entity)
 * @method void set(string $key, TestObject2Entity $entity)
 * @method TestObject2Entity[] getIterator()
 * @method TestObject2Entity[] getElements()
 * @method TestObject2Entity|null get(string $key)
 * @method TestObject2Entity|null first()
 * @method TestObject2Entity|null last()
 */
class TestObject2Collection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TestObject2Entity::class;
    }
}
