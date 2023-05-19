<?php

/**
*@package assessment7 
*/

namespace Inc\Base;
class Activate{
   static function activatePlugin(){
       flush_rewrite_rules();
   }
}