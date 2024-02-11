<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JDWL RONDA</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="relative overflow-hidden bg-cover bg-center bg-fixed h-screen"
  style="background-image: url('/img/bekgron.png'); width:full;  ">  
  <div class="block rounded-lg bg-slate-200 px-10 h-full py-10 md:h-auto md:w-8/12 md:mt-40  md:mx-auto md:mb-16 md:pb-8">  
               <br />  
               <br />  
               <h2 class="text-3xl font-semibold text-center mb-4">Jadwal Ronda</h2>  
               <div class="form-group">  
                    <form name="add_name" id="add_name " >  
                         <div class="mx-auto text-center">  
                              <table class="mx-auto w-11/12" id="dynamic_field">  
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
                              <input type="button" name="submit" id="submit" value="Submit" class="rounded-md py-1 px-2 mt-3 bg-gradient-to-r  from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400"/>  
                         </div>  
                    </form>  
               </div>  
          </div>  
</div>
    
</body>
</html>