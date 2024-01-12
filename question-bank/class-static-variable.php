<?php

  class Counter {
    public static $count = 0;

    public function increment() {
      self::$count++;
    }

    public static function getCount() {
      return self::$count;
    }

    public function getCountViaObject() {
      return self::$count;
    }

    public function getIsbn() {
      return self->$count;
    }


  }

// Incrementing count without creating an instance
  Counter::$count++;
  echo Counter::getCount() . "<br>"; // Outputs: 1

// Creating instances of the Counter class
  $counter1 = new Counter();
  $counter2 = new Counter();

// Each increment affects the static variable, not the instance
  $counter1->increment();
  $counter2->increment();

  echo Counter::getCount() . "<br>"; // Outputs: 3
  echo $counter1->getCountViaObject() . "<br>";
  echo $counter2->getCountViaObject() . "<br>";

