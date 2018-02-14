<?php

namespace App\Services;
/**
 *
 */
class PathUpload
{
  private $request;
  private $dossier;

  function __construct($request, $dossier)
  {
    $this->request = $request;
    $this->dossier = $dossier;
  }

  public function path(){
    $path = 'upload/' . $this->dossier . '/' . date('Y') . '/' . date('m');

    return $path;
  }

  public function originalName(){
    return $this->request->getClientOriginalName();
  }

  public function imageName(){

    $name = $this->generateLittleSlug() . '-' .time(). '.' .$this->request->getClientOriginalExtension();

    return $name;
  }

  private function generateLittleSlug(){
    $text = substr($this->originalName(),0,10);
    $text = trim($text);
    $text = str_slug($text);

    return $text;
  }
}
