<?php

declare(strict_types=1);

namespace Gsoares\ObjectCalisthenics\Rule6\BadExample;

class EM
{
    /** @var object */
    private $ed;

    public function persist(object $obj): void
    {
        $this->ed->dispatchSaveEvent($obj);
    }
}
