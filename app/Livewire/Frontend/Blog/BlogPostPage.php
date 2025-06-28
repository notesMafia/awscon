<?php

namespace App\Livewire\Frontend\Blog;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use Livewire\Component;

class BlogPostPage extends Component
{
    public $slug;

    public $post;

    public $metaData = [];

    public function mount()
    {
//        if (!checkData($this->slug))
//        {
//            return abort(404);
//        }
//
//        $this->post = BlogPost::where('status',1)
//            ->whereHas('getSlug',function ($q){
//                $q->where('slug',$this->slug);
//            })->first();
//
//        if (!$this->post)
//        {
//            return abort(404);
//        }
//
//        $this->metaData = $this->getMetaData();

    }

    public function render()
    {

//        $recentPosts = BlogPost::where('id','!=',$this->post->id)
//            ->orderBy('post_date','desc')->limit(3)->get();
//
//        $categories = BlogCategory::orderBy('name','asc')->limit(10)->get();
//
//        $blogTags = BlogTag::where('status',1)
//            ->orderBy('id','asc')
//            ->get();

        return view('livewire.frontend.blog.blog-post-page');
    }

    private function getMetaData(): array
    {
        if ($this->post->metaData()->exists())
        {
            return [
                'title'=>$this->post->metaData->title ??$this->post->name,
                'description'=>$this->post->metaData->description ??$this->post->description,
                'os_image'=>$this->post->metaData->getOsImage() ??$this->post->thumbnailUrl(),
                'keywords'=>$this->post->metaData->keywords ??'',
            ];
        }
        return [
            'title'=>$this->post->name ??'',
            'description'=>$this->post->description ??'',
            'os_image'=>$this->post->thumbnailUrl(),
            'keywords'=>'',
        ];
    }


}
