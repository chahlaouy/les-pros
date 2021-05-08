<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
    use WithPagination; 

    public $searchTerm;
    public $searchResult = [];
    
    public function searchForProductByUuidOrName($uuid, $name){
        return Product::query()
                ->where('team_id', auth()->user()->currentTeam->id)
                    ->where(function($query) use($uuid, $name) {
                        return $query->where('uuid', 'LIKE', "%{$uuid}%")
                                        ->orWhere('name', 'LIKE', "%{$name}%"); 
                    })->paginate(10);
                    
                        
                            
    }

    public function updatingSearchTerm(){
        $this->resetPage();
    } 
    public function render()
    {
        
        return view('livewire.data-table', [
            'products' => Product::query()
                            ->where('team_id', auth()->user()->currentTeam->id)
                                ->where(function($query) {
                                    return $query->where('uuid', 'LIKE', "%{$this->searchTerm}%")
                                                    ->orWhere('name', 'LIKE', "%{$this->searchTerm}%"); 
                                })->paginate(10)
        ]);
    }
}
