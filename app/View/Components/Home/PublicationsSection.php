<?php

namespace App\View\Components\Home;

use App\Models\Publication;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class PublicationsSection extends Component
{
    public Collection $publications;

    public function __construct(
        $publicationTypeId,
        public string $more,
    ) {
        $records = Publication::where('publication_type_id', $publicationTypeId)
            ->latest()
            ->take(3)
            ->with('image')
            ->get();

        $this->publications = $records;
    }

    public function render(): View|Closure|string
    {
        return view('components.home.publications-section');
    }
}
