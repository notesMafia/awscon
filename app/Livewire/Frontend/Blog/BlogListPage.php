<?php

namespace App\Livewire\Frontend\Blog;

use App\Models\BlogPost;
use Livewire\Component;
use Livewire\WithPagination;

class BlogListPage extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public function render()
    {
        $data = BlogPost::query();

        $data->where('status',1);

        $data = $data->orderBy('post_date','desc')
            ->paginate(10);

        return view('livewire.frontend.blog.blog-list-page',compact('data'));
    }

    public function paginationView(): string
    {
        return '_particles.frontend.custom-pagination';
    }
}
