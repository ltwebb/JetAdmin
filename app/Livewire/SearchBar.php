<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";


    public function render()
    {
        //add additional models as needed for the full website search && update the blade component
        $results = [
            'users' => collect(),
            'posts' => collect()
        ];

        if (strlen($this->search) >= 1) {
            $results['users'] = User::where('name', 'like', '%'.$this->search. '%')->get();
            $results['posts'] = Post::where('title', 'like', '%'.$this->search. '%')->get();
        }

        return view('livewire.search-bar', ['results' => $results]);

        //$results = [];
        // if(strlen($this->search) >= 1) {
        //     $results = User::where('name', 'like', '%'.$this->search. '%')->get();
        // }
        // return view('livewire.search-bar', ['users' => $results]);
    }
}
