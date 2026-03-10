<?php

use Livewire\Component;

new class extends Component {

    public $likes = 0;

    public function like()
    {
        $this->likes++;
    }

};
?>

<div class="border p-4 rounded">

    <p>Likes: {{ $likes }}</p>

    <button wire:click="like" class="bg-green-500 text-white p-2">
        Like 👍
    </button>

</div>