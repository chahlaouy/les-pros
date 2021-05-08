<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Product;

class SearchDropdown extends Component
{

    public $searchTerm;
    public $searchResult = [];

    public function searchForProductByUuidOrName($uuid, $name, $limit){
        return Product::query()
                ->where('team_id', auth()->user()->currentTeam->id)
                    ->where(function($query) use($uuid, $name) {
                        return $query->where('uuid', 'LIKE', "%{$uuid}%")
                                        ->orWhere('name', 'LIKE', "%{$name}%"); 
                    })->take($limit)
                        ->get();
                    
                        
                            
    }

    public function updated(){
        
        $this->searchResult = $this->searchForProductByUuidOrName($this->searchTerm, $this->searchTerm, 5);

    } 
    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
