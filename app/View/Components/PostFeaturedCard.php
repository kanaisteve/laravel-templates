<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PostFeaturedCard extends Component
{
    /**
     * The postcard post data.
     *
     * @var string
     */
    public $post;


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.post-featured-card');
    }
}
