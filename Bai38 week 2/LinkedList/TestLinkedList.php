<?php
include("./DoublyLinkedList.php");

class TestLinkedList {
    public function TestPop() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);

        $list->pop();

        echo $list; 
    }

    public function TestPrepend() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);

        $list->prepend(0);

        echo $list; 
    }

    public function TestPopFirst() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);
        
        $list->popFirst();

        echo $list; 
    }

    public function TestRemoveHeadNode() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);
        
        $node = $list->head();
        $list->remove($node);

        echo $list; 
    }

    public function TestRemoveSecondNode() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);
        
        $node = $list->head();
        $node = $node->next;
        $list->remove($node);

        echo $list; 
    }

    public function TestRemoveTailNode() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);
        
        $node = $list->tail();
        $list->remove($node);

        echo $list; 
    }

    public function TestRemoveNonExistedNode() {
        $list = new DoublyLinkedList();

        $list->append(1);
        $list->append(2);
        $list->append(3);
        
        $node = new DoublyNode(4);

        $list->remove($node);

        echo $list; 
    }
}

$test = new TestLinkedList();
echo "<br/>Pop: ";
$test->TestPop();
echo "<br/>Prepend: ";
$test->TestPrepend();
echo "<br/>Pop First: ";
$test->TestPopFirst();
echo "<br/>TestRemoveHeadNode: ";
$test->TestRemoveHeadNode();
echo "<br/>TestRemoveSecondNode: ";
$test->TestRemoveSecondNode();
echo "<br/>TestRemoveTailNode: ";
$test->TestRemoveTailNode();
echo "<br/>TestRemoveNonExistedNode: ";
$test->TestRemoveNonExistedNode();