       <table class="edit_form">
         <tr>
           <td class="edit_form_header">
             Copy Version
           </td>
         </tr>
         <tr>
           <td class="edit_form_content">
             <form name="gs_version" method="post" action="index.php?editor=misc&z=<?=$currzone?>&action=50">
             Copy version: <br>
             <input type="text" name="gs_version" value="0"> to 
             <input type="text" name="new_version" value="<?=$gsversion?>">
             <center>
               <input type="submit" value="Submit"></form><br><br>
             </center>
           </td>
         </tr>
       </table>