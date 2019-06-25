<?php
  //class for handling actual scraping of data
  class Scraper {
    private $url;

    function __construct($url) {
      $this->url = $url;
    }

    function getURL() {
      return $this->url;
    }
    function setURL($url) {
      $this->url = $url;
    }

    function scrape() {
      try {
        if($this->url === "") {
          throw new Exception("WebScraperPHP Error: URL in Scraper.php not defined.");
        }

        $html = file_get_contents($this->url);

        if($html === "") {
          throw new Exception("WebScraperPHP Error: HTML not recieved from URL. 1. Check URL 2. Ensure that PHP server allows URL fopen wrappers");
        }

        return $html;
      } catch(Exception $e) {
        echo $e->getMessage();
      }
      return null;
    }
  }
?>
