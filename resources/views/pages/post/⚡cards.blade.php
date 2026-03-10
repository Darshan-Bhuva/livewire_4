<?php

use Livewire\Component;

new class extends Component {
    public $name;
    public $rand;
    public $number;

    // public function mount()
    // {
    //     $this->rand = rand(1, 100);
    // }

    // public function rando()
    // {
    //     $this->rand = rand(1, 100);
    // }
};
?>

<div>
    It is not the man {{ $name }} who has too little, but the man who craves more, that is poor. - Seneca

    <br>

    Random: {{ $number }}

    <button wire:click="rando">
        change value
    </button>

    {{ $slots['dar'] }}
</div>