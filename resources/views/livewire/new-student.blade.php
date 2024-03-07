<div>
    <form wire:submit.prevent="saveStudent" class="w-full p-4 mx-auto">
        <div class="grid grid-cols-2 gap-4">

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" wire:model="name" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="matno" class="block text-sm font-medium text-gray-700">Matriculation Number:</label>
                <input type="text" id="matno" wire:model="matno" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="department" class="block text-sm font-medium text-gray-700">Department:</label>
                <input type="text" id="department" wire:model="department" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            </div>
            <div class="mb-4">
                <label for="photo" class="block text-sm font-medium text-gray-700">Photo:</label>
                <input type="file" id="photo" wire:model="photo" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">

                @if($photo)
                    <div class="mt-2">
                        <span class="block text-sm font-medium text-gray-700">Preview:</span>
                        <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="mt-1 h-32 rounded-md shadow-md">
                    </div>
                @endif
            </div>

{{--        <div class="mb-4">--}}
{{--            <label for="rrr" class="block text-sm font-medium text-gray-700">RRR:</label>--}}
{{--            <input type="text" id="rrr" wire:model="rrr" required--}}
{{--                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">--}}
{{--        </div>--}}
        </div>
        <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
            Add Student
        </button>
    </form>
</div>
