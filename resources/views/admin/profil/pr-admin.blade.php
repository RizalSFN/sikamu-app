@extends('layouts.main-admin')
@section('content')
<div class="relative  bg-cover  text-center bg-center bg-fixed h-screen"
  style="background-image: url('/img/bekgron.png'); height:auto; width:auto;  overflow-x:hidden; ">

  <div class="block rounded-lg bg-slate-200 px-10 py-10 md:h-auto md:w-8/12 md:mt-40  md:mx-auto md:mb-16 md:pb-8">
  <div class="pt-24 md:pt-8">
      <h1 class="text-center font-bold text-3xl">
        ADMIN SIKAMU
      </h1>
      <img class="mx-auto h-52 w-52 rounded-full mt-6" src="/img/warga.jpg" alt="profil anda">

      <table class="mt-6 text-left mx-auto mb-4 ">
        <tr>
          <td>
            Nama
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
          <input type="email" value="admin"></input>
          </td>
        </tr>
        <tr>
          <td>
           Email
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            <input type="email" value="admin@gmail.com"></input>
          </td>
        </tr>
        <tr>
          <td>
           Password
          </td>
          <td class="px-2">
            :
          </td>
          <td class="px-2 py-1">
            <input type="password" value="11122"></input>
          </td>
        </tr>
      </table>
      <button class="rounded-md py-3 px-3 mb-8 bg-gradient-to-r   from-cyan-950 to-cyan-700 text-cyan-100 hover:text-cyan-400">LOGOUT!</button>
    </div>
</div>

</div>
@endsection