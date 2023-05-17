<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Estas loggeado!") }}
                    <br><br>
                    <a href="/students"><button>• Alumnos</button></a><br><hr><br>
                    <a href="/careers"><button>•Carreras</button></a><br><hr><br>
                    <a href="/subjects"><button>• Materias</button></a><br><hr><br><br><br>
                    <a href="/audits"><button>• Info Audit</button></a><br><hr>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
