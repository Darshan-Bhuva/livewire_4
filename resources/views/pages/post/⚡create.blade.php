<?php

use Livewire\Component;

new class extends Component {
    public $title = '';
    public $name = 'Darsa';

    // protected $rules=[
    //     'title' => 'required',
    // ];
    public function save()
    {
        // sleep(1);
        // $this->validate([
        //     'title' => 'required',
        // ]);
        $this->title = 'dars';
    }

    function deletePost(){
        sleep(2);
    }

};
?>

<div>
    <form wire:submit="save">

        <flux:input wire:model="title" label="Title" />

        @island
            {{-- <livewire:pages::post.cards :$name/> --}}
            <livewire:pages::post.cards :$name :number="rand()" :wire:key="rand()">
                <livewire:slot name="dar">
                    <flux:button wire:click="$refresh">Refresh</flux:button>
                    Hii
                </livewire:slot>
            </livewire:pages::post.cards>
        @endisland
        <livewire:pages::post.cards :$name :number="rand()" :wire:key="rand()">
        </livewire:pages::post.cards>
        <flux:button wire:click="$refresh">Refreshes</flux:button>
        {{-- <livewire:pages::post.cards :$name
        :wire:key = "unique_id"
        :lazy.bundle = =’$loop → iteration > 6’
        :class="bg-black"
        /> --}}
        {{-- @livewire('pages.post.cards') --}}

        <button type="submit" wire:loading.class="opacity-50" class="bg-white 
        text-black m-2 p-2">Submit flu
            <flux:icon.loading variant="micro" wire:loading wire:target="save" />
        </button>

        <div wire:sort>

            <div wire:sort:ignore class="p-10 m-3 bg-amber-300">1 </div>
            <div class="p-10 m-3 bg-amber-300">2 <flux:icon.loading wire:sort:handle></flux:icon.loading>
            </div>
            <div class="p-10 m-3 bg-amber-300">3 <flux:icon.loading wire:sort:handle></flux:icon.loading>
            </div>
        </div>

        <h1>
            Action Interceptor
        </h1>
        <button wire:click="deletePost" wire:intercept="confirmDelete">
            Delete
        </button>

    </form>
</div>

<script>

    
    function confirmDelete() {
        if (!confirm("Are you sure you want to delete this post?")) {
            return false
        }

        return {
            onSend() {
                console.log("Sending delete request...")
            },

            onFinish() {
                console.log("Delete request finished")
            },

            onCancel() {
                console.log("Delete canceled")
            }
        }
    }
</script>
