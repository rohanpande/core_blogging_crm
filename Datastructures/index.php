<?php

/*
 |
------------------------------------------------------------------
 | SPLStack
 |
------------------------------------------------------------------
 |
*/

$stack = new SplStack();

$stack->push('b');
$stack->push('a');
$stack->push('c');

echo $stack->pop().'\n';
echo $stack->pop().'\n';
echo $stack->pop().'\n';


/*
 |
------------------------------------------------------------------
 | SplMaxHeap
 |
------------------------------------------------------------------
 |
*/

$heap = new SplMaxHeap();
$heap->insert('b');
$heap->insert('a');
$heap->insert('c');

echo $heap->extract().'\n';
echo $heap->extract().'\n';
echo $heap->extract().'\n';


/*
 |
------------------------------------------------------------------
 | SplMinHeap
 |
------------------------------------------------------------------
 |
*/

$heap = new SplMinHeap();
$heap->insert('b');
$heap->insert('a');
$heap->insert('c');

echo $heap->extract().'\n';
echo $heap->extract().'\n';
echo $heap->extract().'\n';


/*
 |
------------------------------------------------------------------
 | SplPriorityQueue
 | # EXTR_DATA (only the data)
 | # EXTR_PRIORITY (only the priority value)
 | # EXTR_BOTH (both array)
------------------------------------------------------------------
 |
*/

$pqueue = new SplPriorityQueue();
$pqueue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
$pqueue->insert('low', 1);
$pqueue->insert('top', 3);
$pqueue->insert('medium', 2);

echo 'TOP ELEMENT: '. $pqueue->top()."\n";
echo $pqueue->extract()."\n";
echo $pqueue->extract()."\n";
echo $pqueue->extract()."\n";

/*
 |
------------------------------------------------------------------
 | SplDoublyLinkedList
 |
------------------------------------------------------------------
 |
*/

$list = new SplDoublyLinkedList();
$list->push('a');
$list->push('b');
$list->push('c');

echo 'TOP: '.$list->top()."\n";
echo 'BOTTOM: '.$list->bottom()."\n";

echo 'FIFO:\n';

$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

for($list->rewind(); $list->valid(); $list->next())
{
  echo $list->current().'\n';
}

echo "LIFO:\n"

$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

for($list->rewind();$list->valid(); $list->next())
{
  echo $list->current().'\n';
}
