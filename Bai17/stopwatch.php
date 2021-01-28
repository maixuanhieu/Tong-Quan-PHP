<?php

class Timer {
    public $start   = 0;
    public $stop    = 0;
    public $elapsed = 0;

   
   function Timer( $start = true ) {
      if ( $start )
         $this->start();
   }

   
   function start() {
      $this->start = $this->_gettime();
   }

   
   function stop() {
      $this->stop    = $this->_gettime();
      $this->elapsed = $this->_compute();
   }


   function elapsed() {
      if (!$this->elapsed)
         $this->stop();

      return $this->elapsed;
   }

   
   function reset() {
      $this->start   = 0;
      $this->stop    = 0;
      $this->elapsed = 0;
   }

  
   function _gettime() {
      $mtime = microtime();
      $mtime = explode( " ", $mtime );
      return $mtime[1] + $mtime[0];
   }


   function _compute() {
      return $this->stop - $this->start;
   }
}
