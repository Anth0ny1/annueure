<?php

namespace App\Services;
/**
 *
 */
class Rss2
{

  private $url;
  private $rss;
  private $jsonEncode;
  private $jsonDecode;


  private $tableaudelien;

  private $array = [];


  // $tableaudelien = ['url1' => ['nbre'=> 12],'url2'];

  public function __construct($tableaudelien)
  {
        $this->tableaudelien = $tableaudelien;

        foreach ($this->tableaudelien as $link) {
          $dede = $this->Rss($link, 5);
          $this->array = array_merge($this->array, $dede);
        }

        usort($this->array, array($this, 'cmp'));
        return $this->array;


  }

  private static function cmp( $a, $b ) {

      return strtotime($a['pubDate']) < strtotime($b['pubDate']);
  }

  // public function __construct(){
  //
  // }
  public function Rss($url, $nb){
    $this->url = $url;

    $this->rss = simplexml_load_file($this->url);
    $this->jsonEncode = json_encode($this->rss);
    $this->jsonDecode = json_decode($this->jsonEncode, true);
    $this->array = array_slice($this->jsonDecode['channel']['item'], 0, $nb);

    //usort($this->array, array($this, 'cmp'));
    return $this->array;
  }

  // public function arrayMerge($arr1 = [], $arr2 = [], $arr3 = [], $arr4 = []){
  //   $this->superArray = array_merge($arr1, $arr2, $arr3, $arr4);
  //
  //   usort($this->superArray, array($this, 'cmp'));
  //   return $this->superArray;
  // }

}
