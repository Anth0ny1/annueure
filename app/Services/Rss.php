<?php

namespace App\Services;
/**
 *
 */
class Rss
{
  //
  // private $url;
  // private $rss;
  // private $jsonEncode;
  // private $jsonDecode;
  //
  //
  // private $tableaudelien;
  //
  // public function __construct($tableaudelien)
  // {
  //       $this->tableaudelien = $tableaudelien;
  // }
  //
  // private static function cmp( $a, $b ) {
  //
  //     return strtotime($a['pubDate']) < strtotime($b['pubDate']);
  // }
  //
  // // public function __construct(){
  // //
  // // }
  // public function Rss($url, $nb){
  //   $this->url = $url;
  //
  //   $this->rss = simplexml_load_file($this->url);
  //   $this->jsonEncode = json_encode($this->rss);
  //   $this->jsonDecode = json_decode($this->jsonEncode, true);
  //   $this->array = array_slice($this->jsonDecode['channel']['item'], 0, $nb);
  //
  //   //usort($this->array, array($this, 'cmp'));
  //   return $this->array;
  // }
  //
  // public function arrayMerge($arr1 = [], $arr2 = [], $arr3 = [], $arr4 = []){
  //   $this->superArray = array_merge($arr1, $arr2, $arr3, $arr4);
  //
  //   usort($this->superArray, array($this, 'cmp'));
  //   return $this->superArray;
  // }
  // public function getUrl($url){
  //   $this->url = $url;
  // }
  //
  // public function getRss(){
  //   $this->rss = simplexml_load_file($this->url);
  // }
  //
  // public function jsonEncode(){
  //   $this->jsonEncode = json_encode($this->rss);
  // }
  //
  // public function jsonDecode(){
  //   $this->jsonDecode = json_decode($this->jsonEncode, true);
  // }
  //
  // public function getLimits($nb){
  //   $this->limits = array_slice($this->jsonDecode['channel']['item'], 0, $nb)
  // }
  //
  // public function arrayMerge(){
  //   $this->superArray
  // }
}
