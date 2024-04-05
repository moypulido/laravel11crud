{{-- This is the student index page. --}}
<x-app-layout>

    {{-- Displaying validation errors --}}
    @if ($errors->any())
        <div id="errorMessage" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
            role="alert">
            <strong class="font-bold">Validation Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <script>
            setTimeout(function() {
                var errorMessage = document.getElementById("errorMessage");
                errorMessage.remove();
            }, 3000);
        </script>
    @endif
    {{-- Displaying success message --}}
    @if (session('success'))
        <div id="successMessage" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        <script>
            setTimeout(function() {
                var successMessage = document.getElementById("successMessage");
                successMessage.remove();
            }, 3000);
        </script>
    @endif

    {{-- Displaying header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Add student form --}}
            <button type="button"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                onclick="toggleForm()">Add Student</button>

            <div id="studentForm" class="hidden">
                <div class="p-4">
                    <form action="{{ route('students.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="mb-4">
                            <label for="age" class="block text-gray-700 text-sm font-bold mb-2">Age:</label>
                            <input type="number" name="age" id="age" min="0"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add
                                Student</button>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                function toggleForm() {
                    var form = document.getElementById("studentForm");
                    form.classList.toggle("hidden");
                }
            </script>

            <br>
            <br>

            {{-- Displaying students --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                @foreach ($students as $student)
                    <x-student-card :student="$student" />
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
