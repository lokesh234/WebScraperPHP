<?php
// Creating the HTML Searcher class
  class HTML_Searcher {
    private $html;

    //Functions for constructing HTML, finding tags 
    function __construct($html) {
      $this->html = $html;
    }

    function findTag($tag) {
      $frontTag = "<".$tag;
      $endTag = "</".$tag.">";

      //array will contain everything inside of the array
      $results = array();

      //so that HTML remains unedited at end of function
      $htmlCopy = (string) $this->html;

    
    
    while(strpos($htmlCopy, $endTag) !== false) {
        $startPos = strpos($htmlCopy, $frontTag);
        $endPos = strpos($htmlCopy, $endTag) + 4;


        array_push($results, substr($htmlCopy, $startPos, $endPos - $startPos));
        $htmlCopy = substr($htmlCopy, $endPos);

    }

      return $results;
    }
  }
 ?>
