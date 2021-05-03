<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Modal extends Component
{
    public $productID;
    public $productName;
    public $productUnit;
    public $productPrice;
    public $productCategory;
    public $productDescription;

    
    public function submitForm(){
        $product = [
            'uuid' => $this->productID, 
            'name' => $this->productName, 
            'price' => $this->productPrice, 
            'category' => $this->productCategory, 
            'description' => $this->productDescription, 
            'unit' => $this->productUnit, 
        ];
        Product::create($product);
    }
    public function render()
    {
        
        return view('livewire.modal');
    }
}
