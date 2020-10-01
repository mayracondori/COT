@extends('layouts.plantilla')
@section('title','welcome')

@section('content')
<div class="bg-gray-100 mx-auto max-w-3xl py-5 px-5 sm:px-24 shadow-xl mb-16">
    <form>
      <div class="bg-white shadow-md rounded px-8 pt-5 pb-1 mb-4 flex flex-col">
        <label class="uppercase tracking-wide text-black text-xl text-center font-bold mb-2">REGISTRASE</label>
        <div class="mx-16 md:flex mb-6">
          <div class="md:w1/2 px-3 mb-6md:mb-0">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
              NOMBRES
            </label>
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-10 mb-1" id="codigo" type="text" placeholder="Ejemplo Juan ">
          </div>
        </div>
        <div class="mx-16 md:flex mb-6">
          <div class="md:w1/2 px-3 mb-6md:mb-0">
            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
              APELLIDOS
            </label>
            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-10 mb-1" id="contraseña" type="text" placeholder="Apellidos" required>
          </div>
        </div>
        <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
                <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CORREO
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="contraseña" type="email" placeholder="correo electronico" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CI
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-16 mb-1" id="ci" type="text" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CELULAR
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-12 mb-1" id="celular" type="number" placeholder="Número de carnet" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                DEPARTAMENTO
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-6 mb-1" id="contraseña" type="text" placeholder="     Departamento" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                GERENCIA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-10 mb-1" id="gerencia" type="text" placeholder="gerencia" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CODIGO DE EMPLEADO
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-1 mb-1" id="codigoempleado" type="number" placeholder="     Código de empleado" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                CONTRASEÑA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-8 mb-1" id="contraseña" type="password" placeholder="Contraseña" required>
            </div>
          </div>
          <div class="mx-16 md:flex mb-6">
            <div class="md:w1/2 px-3 mb-6md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                REPETIR CONTRASEÑA
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-2 mb-1" id="contraseña" type="password" placeholder="   Repetir Contraseña" required>
            </div>
          </div>
        <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3">
            <button class="md:w-full bg-yellow-400 text-white hover:bg-green-400 font-bold py-2 px-32 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
              REGISTRAR
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
@endsection

