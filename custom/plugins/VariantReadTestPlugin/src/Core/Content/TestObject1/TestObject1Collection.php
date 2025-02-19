<?php declare(strict_types=1);

namespace VariantReadTestPlugin\Core\Content\TestObject1;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(TestObject1Entity $entity)
 * @method void set(string $key, TestObject1Entity $entity)
 * @method TestObject1Entity[] getIterator()
 * @method TestObject1Entity[] getElements()
 * @method TestObject1Entity|null get(string $key)
 * @method TestObject1Entity|null first()
 * @method TestObject1Entity|null last()
 */
class TestObject1Collection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return TestObject1Entity::class;
    }
}
