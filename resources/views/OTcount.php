<?php
  
  $count=DB::table('o_t_reports')
   ->where('status','0')
   ->where('touser',Auth::user()->id)
  ->count();
echo $count;  


?>