<?php
$line = "vim is the greatest word processor ever created! Oh vim, how I
love thee!"; 
/*$line = "vimbar is the greatest word processor ever created! Oh vima, how I
love thee!"; */

//if (preg_match("/\bVim\b/i", $line, $match)) 
if (preg_match_all("/Vim/i", $line, $match)) 

print "Match found!";
print_r($match);

?>