<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    {{$user}}
                    <p class="my-3">
                        <button class="bg-blue-500 text-white"
                            onclick='Livewire.emit("openModal", "edit-user", {{ json_encode(["user" => $user->id]) }})'>
                            Edit User
                        </button>

                        <button class="bg-blue-500 text-white"
                            onclick=' console.log({{ json_encode(["user" => $user]) }}) '>
                            Console Log
                        </button>


                    </p>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>