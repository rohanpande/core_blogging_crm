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

echo $stack->pop().PHP_EOL;
echo $stack->pop().PHP_EOL;
echo $stack->pop().PHP_EOL;


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

echo $heap->extract().PHP_EOL;
echo $heap->extract().PHP_EOL;
echo $heap->extract().PHP_EOL;


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

echo $heap->extract().PHP_EOL;
echo $heap->extract().PHP_EOL;
echo $heap->extract().PHP_EOL;


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

echo 'TOP ELEMENT: '. $pqueue->top().PHP_EOL;
echo $pqueue->extract().PHP_EOL;
echo $pqueue->extract().PHP_EOL;
echo $pqueue->extract().PHP_EOL;

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

echo 'TOP: '.$list->top().PHP_EOL;
echo 'BOTTOM: '.$list->bottom().PHP_EOL;

echo 'FIFO:\n';

$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

for($list->rewind(); $list->valid(); $list->next())
{
  echo $list->current().PHP_EOL;
}

echo "LIFO:".PHP_EOL;

$list->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

for($list->rewind();$list->valid(); $list->next())
{
  echo $list->current().PHP_EOL;
}
