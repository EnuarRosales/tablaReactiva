<div>

    <!-- Botón para abrir el modal -->
    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" id="openModalBtn">Abrir Modal</button>

    <body class="bg-gray-100 p-6">
        <div class="relative">


            <!-- Modal -->
            <div class="fixed inset-0 flex items-center justify-center z-50 hidden" id="modal">
                <div class="absolute inset-0 bg-black opacity-50"></div>
                <div class="bg-white p-6 rounded-lg shadow-lg z-10">
                    <!-- Contenido del modal -->
                    <h2 class="text-xl font-semibold mb-4">Mi Modal</h2>

                    <x-label value="titulo del post" />
                    <x-input type="text" class="w-full"  wire:model="title" />
                    {{$title}}

                    <x-label value="contenido del post" />
                    <x-input wire:model="content" type="text" class="w-full" />



                    <!-- Botón para cerrar el modal -->
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 mt-4"
                        id="closeModalBtn">Cerrar</button>

                        <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 mt-4"
                       >crear</button>
                </div>
            </div>
        </div>



        {{-- If your happiness depends on money, you will never be happy with yourself. --}}
</div>
