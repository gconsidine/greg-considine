<?php

class ScrapeController extends BaseController {
  
  /* TODO: Write reddit scraper */
  public function getResponseByType($sources, $type) {
    $response = '{
      "type" : "' . $type . '",
      "source" : "' . $sources[0] . '",
      "response" : "yadda yadda yadda"
    }';

    return $response;
  }
}
