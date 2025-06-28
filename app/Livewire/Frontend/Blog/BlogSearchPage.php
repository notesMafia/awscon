<?php

namespace App\Livewire\Frontend\Blog;

use App\Models\BlogPost;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BlogSearchPage extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    #[Url]
    public $s;

    public function mount()
    {
        $this->s = trim($this->s);
    }

    public function render()
    {

        $data = BlogPost::query();

        $data->where('title','LIKE',"%{$this->s}%");

        $data->where('status',1);

        $data = $data->orderBy('post_date','desc')
            ->paginate(10);

        return view('livewire.frontend.blog.blog-search-page',compact('data'));
    }

    public function paginationView(): string
    {
        return '_particles.frontend.custom-pagination';
    }
}
