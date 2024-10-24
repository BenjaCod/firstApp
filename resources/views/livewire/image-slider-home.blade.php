<div class="relative w-full flex justify-center items-center">
    <!-- Left arrow button -->
    <button wire:click="prev" class="absolute left-0 bg-white text-black p-2 rounded-full hover:bg-gray-100 ml-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
        </svg>
    </button>

    <!-- Image slider -->
    <div class="flex space-x-4 overflow-hidden">
        @foreach($visibleImages as $image)
            <img src="{{ $image }}" class="w-1/3 rounded-lg" alt="Image">
        @endforeach
    </div>

    <!-- Right arrow button -->
    <button wire:click="next" class="absolute right-0 bg-white text-black p-2 rounded-full hover:bg-gray-100 mr-1">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
    </button>
</div>