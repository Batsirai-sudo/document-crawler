<?php

namespace Batsirai\Crawler\Classes;
use Symfony\Component\DomCrawler\Crawler;

class News{

    private $url_to_crawler = '';  // URL to Crawler website
    private $dom = ''; // The DOM the HTML content from url
    private $crawler;  // Symfony components aganist that DOM  where we colud grab different headlines where it returns array headlines
    private $headlines;

    function __construct($url) {

        $this->url_to_crawler = $url;   
        $this->dom = file_get_contents($this->url_to_crawler);
        $this->crawler = new Crawler($this->dom);
    }

    function get_headlines() {

        $this->headlines = []; 
        if($this->crawler){  
            $nodeValues = $this->crawler->filter('.headline a')->each(function (Crawler $node, $i) {
                $this->headlines[$i] = [ "text"=>$node->text(),"link"=>$node->attr('href')]; 
            });
           return $this->headlines; 
        }else{
            return false; 
        } 
    }
}