<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule6\BadExample;

class EntityManager
{
    /** @var object */
    private $eventDispatcher;

    public function persist(object $entity): void
    {
        $this->eventDispatcher->dispatchSaveEvent($entity);
    }
}
