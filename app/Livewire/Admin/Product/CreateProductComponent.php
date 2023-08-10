<?php

namespace App\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class CreateProductComponent extends Component
{

    use WithFileUploads;

    #[Rule('required')]
    public $brand_id;

    #[Rule('required')]
    public $name;

    #[Rule('nullable|unique')]
    public $slug;

    #[Rule('required')]
    public $dimensions;

    #[Rule('required')]
    public $display;

    #[Rule('required')]
    public $os;

    #[Rule('required')]
    public $chipset;

    #[Rule('required')]
    public $cpu;

    #[Rule('required')]
    public $memory;

    #[Rule('required')]
    public $battery;

    #[Rule('required')]
    public $description;

    #[Rule('required|max:11')]
    public $price;

    #[Rule('required|max:11')]
    public $stock;

    #[Rule('nullable|sometimes|image|max:1024|mimes:jpg,jpeg,png,gif')]
    public $image;

    #[Rule('nullable')]
    public $release_date;

    public function render()
    {

        $data = [
            'title' => 'Create Product',
            'brand' => Brand::all(),
        ];
        return view('livewire.admin.product.create-product-component', $data)->extends('components.layouts.main')->section('content-wrapper');
    }

    public function create(Request $request)
    {
        $validated = $this->validate();

        $request->merge(['slug' => strtolower(str_replace(' ', '-', $request->name))]);

        if($this->image) {
            $validated['image'] = $this->image->store('images', 'public');
        }

        Product::create($validated);
        return redirect()->route('product.products')->with('success', 'Created.');

    }
}
