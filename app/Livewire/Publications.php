<?php

namespace App\Livewire;

use App\Models\Publication;
use Livewire\Component;

class Publications extends Component
{
    public int $type;

    public function render()
    {
        $posts = Publication::where('publication_type_id', $this->type)
            ->latest()
            ->paginate(5);

        return view('livewire.publications', compact('posts'));
    }
}
