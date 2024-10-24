<?php

namespace App\Livewire;

use Livewire\Component;

class ImageSliderHome extends Component
{
    public $images = [];
    public $currentIndex = 0;
    public $visibleImagesCount = 3;

    public function mount()
    {
        // Use URLs for the images
        $this->images = [
            asset('images\photo-1.png'),
            asset('images\photo-2.png'),
            asset('images\photo-1.png'),
            asset('images\photo-2.png'),
            asset('images\photo-1.png'),
        ];
    }

    public function next()
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->images);
    }

    public function prev()
    {
        $this->currentIndex = ($this->currentIndex - 1 + count($this->images)) % count($this->images);
    }

    public function render()
    {
        // Get the visible images based on the current index
        $visibleImages = array_slice($this->images, $this->currentIndex, $this->visibleImagesCount);

        // Handle the case where the array needs to wrap around
        if (count($visibleImages) < $this->visibleImagesCount) {
            $visibleImages = array_merge(
                $visibleImages,
                array_slice($this->images, 0, $this->visibleImagesCount - count($visibleImages))
            );
        }

        // Dump the visible images for debugging
        // dd($visibleImages); // Uncomment this line to check the output

        // Pass visibleImages to the view
        return view('livewire.image-slider-home', ['visibleImages' => $visibleImages]);
    }
}
