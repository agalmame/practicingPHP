<?php
if(isset($pollData)===false){
    trigger_error('views/poll-html needs a $pollData object');
   }
   return "
   <aside id='poll'>
       <form method='post' action='index.php'>
           <p>$pollData->poll_question</p>
           <select name='user-answer'>
               <option value='yes'>Yes, it is</option>
               <option value='no'>no, not really</option>
           </select>
           <input value='post' type='submit'>
       </form>
       <ul>
           <li>$pollData->yes Said yes</li>
           <li>$pollData->no Said no</li>
       </ul>
   </aside>    
   ";
?>