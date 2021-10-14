<?php

class Table {
    private $_rows;
    
    public function __construct() {
        $this->_rows = array();
    }
    
    public function append($row) {
        $this->_rows[] = $row;
    }
    
    public function draw() {
        echo '<table border="1">'.PHP_EOL; // Begin van de tabel, border voor de duidelijkheid
        
        foreach($this->_rows as $row) {
            echo '<tr>'.PHP_EOL;
            
            foreach($row->getCells() as $cell) {
                echo '<td>'.$cell->getContent().'</td>'.PHP_EOL;
            }
        
            echo '</tr>'.PHP_EOL;
        }
        
        echo '</table>'.PHP_EOL;
    }
}

class Row {
    private $_cells;
    
    public function __construct() {
        $this->_cells = array();
    }
    
    public function append($cell) {
        $this->_cells[] = $cell;
    }
    
    public function getCells() {
        return $this->_cells;
    }
}

class Cell {
    private $_content;
    
    public function __construct($content) {
        $this->_content = $content;
    }
    
    public function getContent() {
        return $this->_content;
    }
}
/* Procedurele code */
$rowA = new Row();
$rowA->append(new Cell('id'));
$rowA->append(new Cell('firstname'));
$rowA->append(new Cell('lastname')); // Zo kan het ook!
$rowA->append(new Cell('email'));
$rowA->append(new Cell('username'));

$rowB = new Row();
$rowB->append(new Cell('5'));
$rowB->append(new Cell('hotsss'));
$rowB->append(new Cell('hats'));
$rowB->append(new Cell('huts@huts.nl'));
$rowB->append(new Cell('hatsaa'));

$rowC = new Row();
$rowC->append(new Cell('6'));
$rowC->append(new Cell('Jelle'));
$rowC->append(new Cell('Kragten'));
$rowC->append(new Cell('200516@student.glu.nl'));
$rowC->append(new Cell('jalla'));

$rowD = new Row();
$rowD->append(new Cell('7'));
$rowD->append(new Cell('Boef'));
$rowD->append(new Cell('gewoon'));
$rowD->append(new Cell('gewoonboefman@gmail.nl'));
$rowD->append(new Cell('gewoonboefman'));

$table = new Table();
$table->append($rowA);
$table->append($rowB);
$table->append($rowC);
$table->append($rowD);
$table->draw();

?>