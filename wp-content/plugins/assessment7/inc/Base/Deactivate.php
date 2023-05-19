<?php

/**
*@package assessment7 
*/

namespace Inc\Base;
class Deactivate{
   static function deactivatePlugin(){
       flush_rewrite_rules();
   }
}