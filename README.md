# WebScraperPHP
__WebScraperPHP is my first respository to ever be submitted on GitHub so please excuse the lack of formalities in this README. I will try my best to mimic what I have seen from other repositories__

WebScraper PHP is a ultra simple PHP website Scraper that can be integrated and learned with ease.

## Scraper.php
This .php contains the class Scraper whose primary function is to retrieve HTML from a source.

Declare the object as such:
```PHP
  $scraper = new Scraper($scrape_url);
```
The Class Scraper takes the intended URL as a parameter in its constructor.

Scrape the url by calling:
```PHP
  $scraped_html = $scraper->scrape();
```

##HTMl_Searcher.php
Declare the object as such:
```PHP
   $html_searcher = new HTML_Searcher($scraped_html);
```
Now using the searchTag() method you can search for various tags throughout the HTML document. 

```PHP
  $link_arr = $html_searcher->findTag('p');
```
$link_arr would now be a array containing all of the occurences of the <p> tag.

## Code Example
```PHP
<?php
  include 'WebScraperPHP/scraper.php';
  include 'WebScraperPHP/html_searcher.php';


  $scrape_url = "http://php.net/downloads.php";
  $scraper = new Scraper();

  $scraped_html = $scraper->scrape();

  $html_searcher = new HTML_Searcher($scraped_html);

  $link_arr = $html_searcher->findTag('p');
  print_r($link_arr);


 ?>
```


