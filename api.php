<?php
 /**
 * api.php is a sample API file to be called via AJAX to 
 * deliver the contents of 2 JSON files, one of which orders the 
 * data by year, the other by Box Office Results.
 *
 * The page can be called via AJAX either via GET or POST, using a variable 
 * named "cat":
 *
 * <code>
 * api.php?cat=box
 * </code>
 *
 */

if(isset($_REQUEST['cat']))
{//check to be sure data has been transmitted via GET or POST
	switch($_REQUEST['cat'])
	{//determine contents of 'cat'
		case "own":
			include('data/convertcsv.js'); //"box" orders by box office results
			break;
		default:
			include('data/convertcsvstreet.js'); //default orders by year
	}
}else{//if not data sent, inform calling application
	echo "Incorrect parameter sent";
}
