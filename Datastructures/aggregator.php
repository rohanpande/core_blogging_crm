<?php

class WebTechnologies implements IteratorAggregate {
  private $tech;
  public function __construct()
  {
    $this->tech = explode(',','PHP,XML,C,C++,JAVA,J2EE,J2ME,ASP.NET,C#,VB.NET,AZURE,AMAZON AWS,PYTHON,RUBY');
  }

  public function getIterator()
  {
    return new ArrayIterator($this->tech);
  }

}

$tech = new WebTechnologies();
foreach ($tech as $technology) {
  echo $technology.PHP_EOL;
}
