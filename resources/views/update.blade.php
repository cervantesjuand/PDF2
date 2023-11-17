@extends('layouts.app')
<div class="bg-gray-300 w-full h-screen  pt-[100px] pl-[350px] flex flex-col justify-center items-center" >
    
    <div class=" w-[500px] h-[600px] bg-[#232E3A] rounded-lg">
        <h1 class="text-[1.4rem] text-[#fff] font-bold mt-8 ml-[37px]">Actualizar Registro</h1>
        <form class="mt-8 flex flex-col justify-center items-center gap-4"
        action="" method="post">
        @csrf
        @method('PUT')
            <input class="w-[85%] h-[50px] border border-[#1E4FBB] bg-[#232E3A] outline-none text-[1.1rem] pl-4 text-white" type="text" id="nombre" name="nombre" value="{{$user->nombre}}" required>
            <input class="w-[85%] h-[50px] border border-[#1E4FBB] bg-[#232E3A] outline-none text-[1.1rem] pl-4 text-white" type="text" id="cedula" name="cedula" value="{{$user->cedula}}" required>
            <input class="w-[85%] h-[50px] border border-[#1E4FBB] bg-[#232E3A] outline-none text-[1.1rem] pl-4 text-white" type="tel" id="telefono" name="telefono" value="{{$user->telefono}}" required>
            <input class="w-[85%] h-[50px] border border-[#1E4FBB] bg-[#232E3A] outline-none text-[1.1rem] pl-4 text-white" type="text" id="direccion" name="direccion" value="{{$user->direccion}}" required>
            <h2 class="text-white text-[1rem] mt-4 mb-4 font-semibold">Actualizar datos del Usuario</h2>
            <button class="w-[85%] h-[50px] mb-4 bg-[#1E4FBB] text-xl text-white font-bold
                type="submit">Actualizar
            </button>
            <p class="text-white font-medium">¿Esta seguro de actualizar los datos?</p>
        </form>
    </div>
</div>