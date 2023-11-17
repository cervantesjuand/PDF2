@extends('layouts.app')

<div class="bg-gray-300 w-full h-screen pt-[100px] pl-[250px]">
    <div class="mt-[10px] ml-[80px]">
        <h1 class="text-center text-4xl font-bold mb-[70px]">Lista de Usuarios</h1>
        <a href="{{route('register')}}">
            <button class="w-[250px] h-[50px] rounded-2xl bg-blue-700 text-[1.1rem] font-bold text-white">
                Registrar Usuario
            </button>
        </a>
    </div>
        <div class="flex justify-center mt-[20px]">
            <table class="w-[90%] bg-white border border-gray-300 justify-center">
                <thead>
                <tr class="bg-black" >
                    <th class="py-2 px-4 text-gray-200 border-b">ID</th>
                    <th class="py-2 px-4 text-gray-200 border-b">NOMBRE</th>
                    <th class="py-2 px-4 text-gray-200 border-b">CÉDULA</th>
                    <th class="py-2 px-4 text-gray-200 border-b">TELÉFONO</th>
                    <th class="py-2 px-4 text-gray-200 border-b">DIRECCIÓN</th>
                    <th class="py-2 px-4 text-gray-200 border-b">ACCIONES</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ( $users as $user )
                        <tr>
                            <td class="py-2 text-center px-4 border-b">{{$user->id}}</td>
                            <td class="py-2 text-center px-4 border-b">{{$user->nombre}}</td>
                            <td class="py-2 text-center px-4 border-b">{{$user->cedula}}</td>
                            <td class="py-2 text-center px-4 border-b">{{$user->telefono}}</td>
                            <td class="py-2 text-center px-4 border-b">{{$user->direccion}}</td>
                            <td class="py-2 text-center px-4 border-b">
                                <a href="{{route('user.update', $user->id)}}" class="text-white font-bold ml-5 bg-blue-800 hover:bg-blue-600 pl-7 pr-7 pt-2 pb-2 rounded-lg">
                                Update</a>
                                <form action="{{ route('delete', $user->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="focus:outline-none text-white font-bold bg-red-700 hover:bg-red-800 pl-7 pr-7 pt-2 pb-2 rounded-lg">
                                        Delete
                                    </button>
                                </form>
                                <a href="{{ route('user.pdf', $user->id) }}">
                                    <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold mt-2 p-3 rounded-md pb-3  ">
                                        <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                    </button>
                                </a>
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>
            </div>

</div>
