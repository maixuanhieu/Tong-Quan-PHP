<?php
include("../DoublyNode.php");
include("./AbstractLinkedList.php");

class DoublyLinkedList extends AbstractLinkedList {
    private $head;
    private $tail;

    public function __construct(){}

    public function prepend($value) {
        $newNode = new DoublyNode($value);

        if (!$this->isEmpty()) 
        {
            $this->head->previous = $newNode;
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
            $newNode = new DoublyNode($value);

            $newNode->previous = $this->tail;
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

        if ($this->head->next == NULL){
            $this->head = NULL;
            $this->tail = NULL;
        }
        else {
            $this->tail = $this->tail->previous;
            $this->tail->next = NULL;
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
        else {
            $this->head->next->previous = NULL;
            $this->head = $this->head->next;

        }
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

        if ($this->head === $node)
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

        if($currentNode->next !== NULL) {
            $node->next->previous = $node->previous;
        }
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