<?php

namespace App\View\Components;

use App\Models\Publication;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostView extends Component
{
    public Publication $post;

    public function __construct(
        $id,
    ) {
        $this->post = Publication::find($id);
    }

    public function render(): View|Closure|string
    {
        return view('components.post-view');
    }
}
