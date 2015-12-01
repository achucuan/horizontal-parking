<?php

namespace App\Models\patterns;

class StrategyContext {
   private ReportsStrategy $strategy;

   public function __construct(ReportsStrategy $strategy){
      $this->strategy = $strategy;
   }

   public function executeStrategy(){
      return $this->strategy->doReport();
   }
}