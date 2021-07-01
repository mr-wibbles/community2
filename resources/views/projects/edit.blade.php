<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editing '{{ $projects->title }}'
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <form method="POST" action="/projects/{{ $projects->id }}">
                    
                        @method('PUT')

                        @csrf

                        <div class="mb-4">

                            <label for="title" class="font-bold text-gray-800">Title:</label>
                        
                            <input type="text" class="h-10 bg-white border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus: ring-0" id="title" name="title" value="{{ $projects->title }}">
                        
                        </div>

                        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Save</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
