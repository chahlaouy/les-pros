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
        
        $product = $this->validate([
            'productID' => 'required | unique:products,uuid', 
            'productName' => 'required', 
            'productPrice' => 'required|numeric', 
            'productCategory' => 'required', 
            'productDescription' => 'required', 
            'productUnit' => 'required',
            
        ]);
        dd($product);
        $product = [
            'uuid' => $this->productID, 
            'name' => $this->productName, 
            'price' => $this->productPrice, 
            'category' => $this->productCategory, 
            'description' => $this->productDescription, 
            'unit' => $this->productUnit,
            'added_by' => request()->user()->name,
            'last_modified_by' => request()->user()->name,
            'team_id' => request()->user()->currentTeam->id
        ];
        try {

            Product::create($product); 
            $this->resetForm();
            session()->flash('success', __('Product added with success'));

        } catch (\Exception $ex) {

            session()->flash('error', __('Sorry there has been an error please try again later'));
        }
    }

    private function resetForm(){

        $this->productID = '';
        $this->productName = '';
        $this->productPrice = '';
        $this->productCategory = '';
        $this->productDescription = '';
        $this->productUnit = '';
    }

    public function refreshProductList(){

        return redirect()->route('products.index');
    }
    public function render()
    {
        
        return view('livewire.modal');
    }
}
