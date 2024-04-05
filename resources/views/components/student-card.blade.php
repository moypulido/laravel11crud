<div class="p-6 sm:px-20 bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold dark:text-gray-200 ">
        <a href="{{ route('students.show', $student) }}">
            {{ $student->name }}
            {{ $student->age }}
            <form action="{{ route('students.destroy', $student) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
            </form>
        </a>
    </div>
</div>
