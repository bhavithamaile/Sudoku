<?php

/**
* Bootstrap file
*
* This is an example of how to use the SudokuSolver Class
* Here the input array has been hardcoded. It could be send
* as get or post in the real application.
*
* @author Anush Prem <goku.anush@gmail.com>
* @package Solver
* @subpackage Sudoku
* @version 0.1
*/

/**
* Required Class files
*/
include_once "SudokuSolver.class.php";

// The application could take longer than normal php execution
// time. So set the execution time limit to 0(unlimited).
set_time_limit(0);

// input sudoku array in the format row == col array mapping
$sudoku = array(
array(0,4,0,0,5,3,1,0,2),
array(2,0,8,1,0,0,7,0,0),
array(5,0,1,4,2,0,6,0,0),
array(8,1,4,0,3,0,2,0,7),
array(0,6,0,2,0,5,0,1,9),
array(0,5,0,7,4,0,0,6,3),
array(0,0,0,0,7,4,5,8,1),
array(1,8,5,9,0,2,0,0,0),
array(4,0,3,0,0,8,0,2,6)
);

// create an object of SudokuSolver.
$solver = new SudokuSolver();

// Pass the input sudoku to the $solver object.
$solver -> input ($sudoku);

// Solve the sudoku and return the solved sudoku.
$solved = $solver -> solve ();

// printing the formated input sudoku
print "<B>Input Sudoku:</B><br />";
foreach ($sudoku as $row){
foreach ($row as $col ){
print $col . "&nbsp;&nbsp;";
}
print "<br />";
}

print "<hr />";

// printing the formated solved sudoku.
print "<B>Solved Sudoku:</B><br />";
foreach ($solved as $row){
foreach ($row as $col ){
print $col . "&nbsp;&nbsp;";
}
print "<br />";
}
?>
