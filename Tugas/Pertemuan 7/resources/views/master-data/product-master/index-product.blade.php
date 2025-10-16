<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-white">
            {{ __('Product Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-5 text-2xl font-bold">Product List</h2>

                    <x-auth-session-status class="mb-4" :status="session('success')" />

                    <table class="min-w-full bg-white border border-gray-300 table-auto">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 text-left border-b">Product Name</th>
                                <th class="py-2 px-4 text-left border-b">Unit</th>
                                <th class="py-2 px-4 text-left border-b">Type</th>
                                <th class="py-2 px-4 text-left border-b">Quantity</th>
                                <th class="py-2 px-4 text-left border-b">Producer</th>
                                <th class="py-2 px-4 text-left border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $product->product_name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $product->unit }}</td>
                                    <td class="py-2 px-4 border-b">{{ $product->type }}</td>
                                    <td class="py-2 px-4 border-b">{{ $product->qty }}</td>
                                    <td class="py-2 px-4 border-b">{{ $product->producer }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('product-edit', $product->id) }}" class="bg-yellow-500 text-black px-4 py-2 rounded-md">Edit</a>
                                        <!-- Tombol Delete -->
                                        <form action="{{ route('product-destroy', $product->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Tombol Tambah Produk -->
                    <div class="mt-4">
                        <a href="{{ route('product-create') }}" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-black bg-blue-500 border rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 dark:bg-blue-300 dark:hover:bg-blue-400 dark:focus:ring-blue-300"">Create new product</a>
                    </div>
                </div>

                @vite('resources/js/app.js') <!-- Include Vite's JS assets -->
            </div>
        </div>
    </div>
</div>
</x-app-layout>
