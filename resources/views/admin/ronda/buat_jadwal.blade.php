<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
     <script src="https://cdn.tailwindcss.com"></script>
     <title>jadwal_ronda</title>
</head>
<body>
     <div class="relative bg-cover bg-center bg-fixed h-screen"
     style="background-image: url('/img/bekgron.png');  width:full; overflow-x:hidden;  ">
     <div class="block  rounded-lg bg-slate-200  h-full  md:h-auto md:w-8/12 md:mt-16  md:mx-auto md:mb-16 md:pb-8 md:py-10 md:px-20">  
     <br />  
               <h2 class="text-3xl font-semibold text-center mb-4 mt-8 md:mt-0">Jadwal Ronda</h2>  
               <div class="form-group">  
                    <form name="add_name" id="add_name " >  
                         <div class="mx-auto text-center">  
                              <table class="mx-auto w-11/12 mb-4" id="dynamic_field">  
                                   <tr>  
                                        <td >
                                         
                                        <select class="w-auto mt-3 mr-3" name="name[]" class="form-control name_list col-sm col-md-7" placeholder="PILIH WARGA">
                                        <option value="---Pilih Warga---">---Pilih Warga---</option>
                                        <option value="Umam">Umam</option>
                                        <option value="Agus">Agus</option>
                                        </select>
                                        </td>
                                        <td >
                                        <select class="w-auto mt-3" name="hari[]" class="form-control day_list col-sm col-md-7" placeholder="PILIH HARI">
                                        <option value="---Pilih Hari---">---Pilih Hari---</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        </select>
                                        </td>  
                                        <td ><button type="button" name="add" id="add" class="rounded-md py-1 px-1 mt-3 bg-gradient-to-r ml-3  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Tambah</button></td>  
                                   </tr>  
                              </table>  
                              <input type="button" name="submit" id="submit" value="Submit" class="rounded-md py-1 px-2 mt-2 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400"/>  
                         </div>  
                    </form>  
               </div>  
          </div>  
</div>
     </body>  
</html>  
<script>  
$(document).ready(function(){  
     var i=1;  
     $('#add').click(function(){  
          i++;  
          $('#dynamic_field').append('<tr id="row'+i+'"><td><select class="w-auto mr-3" name="name[]" class="form-control name_list col-sm col-md-7"><option value="---Pilih Warga---">---Pilih Warga---</option><option value="Umam">Umam</option><option value="Agus">Agus</option></td><td></select><select class="w-auto mt-3" hari="hari[]" class="form-control day_list col-sm col-md-7"><option value="---Pilih Hari---">---Pilih Hari---</option><option value="Senin">Senin</option><option value="Selasa">Selasa</option></select></td><td><button type="button" name="remove" id="'+i+'" class="btn_remove rounded-md py-1 px-1 mt-3 bg-gradient-to-r ml-3  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">Urungkan</button></td></tr>');  
     });  
     $(document).on('click', '.btn_remove', function(){  
          var button_id = $(this).attr("id");   
          $('#row'+button_id+'').remove();  
     });  
     $('#submit').click(function(){            
          $.ajax({  
               url:"name.php",  
               method:"POST",  
               data:$('#add_name').serialize(),  
               success:function(data)  
               {  
                    alert(data);  
                    $('#add_name')[0].reset();  
               }  
          });  
     });  
});  
</script>
     
</body>
</html>