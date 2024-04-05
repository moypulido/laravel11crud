<x-app-layout>

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

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between">
                        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Student Details</h2>
                        <a href="{{ route('students.index') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Back</a>
                    </div>
                    <div class="mt-8 text-gray-600 dark:text-gray-400">
                        <div class="flex items-center justify-between">
                            <div class="w-1/2">
                                <p class="text-lg font-semibold">Name:</p>
                                <p class="text-lg">{{ $student->name }}</p>
                            </div>
                            <div class="w-1/2">
                                <p class="text-lg font-semibold">Age:</p>
                                <p class="text-lg">{{ $student->age }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8">
                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="name" class="block text-lg font-semibold">Name:</label>
                                <input type="text" name="name" id="name" value="{{ $student->name }}"
                                    class="border border-gray-300 rounded-md px-4 py-2 w-full">
                            </div>
                            <div class="mb-4">
                                <label for="age" class="block text-lg font-semibold">Age:</label>
                                <input type="number" name="age" id="age" value="{{ $student->age }}"
                                    class="border border-gray-300 rounded-md px-4 py-2 w-full">
                            </div>
                            <div>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
