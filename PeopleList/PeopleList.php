<?php
declare(strict_types=1);

class PeopleList implements Iterator
{
    public array $list = [];

    public function addPerson(object $person): void
    {
        $this->list[] = $person;
    }

    public function current()
    {
        return current($this->list);
    }

    public function next(): void
    {
        next($this->list);
    }

    public function key()
    {
        return key($this->list);
    }

    public function valid(): bool
    {
        return null !== key($this->list);
    }

    public function rewind(): void
    {
        reset($this->list);
    }
}
