<x-layout title="category">
    <x-ui.section title="category">

        @if (count($categories) < 1)
            Category not found
        @else
            <table class="w-2/3">
                <thead>
                    <tr class="grid grid-cols-[1fr_10fr_1fr]">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="grid grid-cols-[1fr_10fr_1fr] odd:bg-white even:bg-gray-200 hover:bg-gray-600 hover:text-white cursor-pointer">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td><button class="bg-red-500 px-1 hover:text-white hover:bg-black">Delete</button></td>
                        </tr>

                    @endforeach
                </tbody>

                <table>
        @endif

    </x-ui.section>
</x-layout>
