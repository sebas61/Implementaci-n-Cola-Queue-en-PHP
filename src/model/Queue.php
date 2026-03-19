<?php

require_once "Node.php";

class Queue
{
    private $head;
    private $tail;


    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function _push(mixed $object): bool
    {
        $node = new Node($object);
        if ($this->head == null) {
            $this->head = $node;
            $this->tail = $node;
            return true;
        } else {
            $this->tail->setNext($node);
            $this->tail = $node;
            return true;
        }
    }

    public function _pull(): mixed
    {
        if ($this->head == null) {
            return null;
        }

        $node = $this->head;
        $this->head = $this->head->getNext();
        if ($this->head == null) {
            $this->tail = null;
        }

        return $node->getValue();
    }


    public function _peek(): mixed
    {
        if ($this->head == null) {
            return null;
        }
        return $this->head->getValue();
    }

    public function _isEmpty(): bool
    {
        if ($this->head == null) {
            return true;
        } else {
            return false;
        }
    }

    public function _size(): int
    {
        $size = 0;
        $current = $this->head;

        while ($current != null) {

            $size++;
            $current = $current->getNext();
        }
        return $size;
    }

    public function _toString(): string
    {
        $current = $this->head;
        $result = "[";

        while ($current != null) {
            $result .= $current->getValue();

            if ($current->getNext() != null) {
                $result .= ", ";
            }

            $current = $current->getNext();
        }

        $result .= "]";

        return $result;
    }
}
