<?php

namespace Xenus;

use Traversable;
use IteratorIterator;

class Cursor extends IteratorIterator
{
    private $iterator;
    private $collection;

    public function __construct(Traversable $iterator, Collection $collection)
    {
        $this->iterator = $iterator;
        $this->collection = $collection;

        parent::__construct($iterator);
    }

    public function current()
    {
        $document = parent::current();

        if ($document instanceof Document) {
            $document->connect($this->collection);
        }

        return $document;
    }

    public function toArray()
    {
        $documents = [];

        foreach ($this as $document) {
            $documents[] = $document;
        }

        return $documents;
    }

    public function __call(string $name, array $arguments)
    {
        return call_user_func_array([$this->iterator, $name], $arguments);
    }
}
