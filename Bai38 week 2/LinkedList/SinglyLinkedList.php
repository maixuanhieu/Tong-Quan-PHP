<?php
include("../SinglyNode.php");
include("./AbstractLinkedList.php");

class SinglyLinkedList extends AbstractLinkedList {
    private $head;
    private $tail;

    public function __construct(){}

    public function prepend($value) {
        $newNode = new SinglyNode($value);

        if (!$this->isEmpty()) 
        {
            $newNode->next = $this->head;
        }
        else 
        {
            $this->tail = $newNode;
        }

        $this->head = $newNode;
    }

    public function append($value) {
        if ($this->isEmpty()) 
        {
            $this->prepend($value);
        }
        else 
        {
            $newNode = new SinglyNode($value);

            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
    }

    public function pop() {
        if ($this->isEmpty()) 
        {
            echo "List is Empty";
            return;
        }  

        $currentNode = $this->head;
        $precurrentNode = NULL;

        while ($currentNode->next != NULL)
        {
            $precurrentNode = $currentNode;
            $currentNode = $currentNode->next;
        }

        if ($precurrentNode == NULL) 
        {
            $this->head = NULL;
            $this->tail = NULL;
        }
        else 
        {
            $precurrentNode->next = NULL;
        }
    }

    public function popFirst() {
        if ($this->isEmpty()) 
        {
            echo "List is Empty";
            return;
        }

        if ($this->head->next == NULL)
        {
            $this->head = NULL;
            $this->tail = NULL;
        }
        else $this->head = $this->head->next;
    }

    public function head() {
        return $this->head;
    }

    public function tail() {
        return $this->tail;
    }

    public function remove($node) {
        if ($this->isEmpty()) 
        {
            echo "List is Empty";
            return;
        }

        if ($this->head == $node)
        {
            $this->popFirst();
            return;
        }

        $currentNode = $this->head;

        while ($currentNode->next !== $node && 
               $currentNode->next != NULL)
        {
            $currentNode = $currentNode->next;
        }

        if ($currentNode->next == NULL)
        {
            echo "Node doesn't exist";
            return;
        }
        $currentNode->next = $node->next;
    }

    public function isEmpty() {
        return ($this->head == NULL);
    }

    public function __toString() {
        $arr = [];

        $currentNode = $this->head;

        while($currentNode != NULL) {
            $arr[] = $currentNode->data;
            $currentNode = $currentNode->next;
        }

        return implode("|",$arr);
    }
}