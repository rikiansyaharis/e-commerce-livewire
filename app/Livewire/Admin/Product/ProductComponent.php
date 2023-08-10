<?php

namespace App\Livewire\Admin\Product;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class ProductComponent extends Component
{

    use WithFileUploads;
    use WithPagination;

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

    #[Rule('required')]
    public $price;

    #[Rule('required')]
    public $stock;

    #[Rule('image|max:1024|mimes:jpg,jpeg,png,gif')]
    public $image;

    #[Rule('nullable')]
    public $release_date;

    // public $newImage;
    public $oldImage;
    public $product_id;
    public $search = '';
    public $product;
    public $updateMode = false;

    public function render(Brand $brand)
    {
        $data = [
            'title' => 'Product',
            'data' => Product::latest()->where('name','Like', '%' . $this->search .'%')->paginate(5),
            'brand' => Brand::all()
        ];

        return view('livewire.admin.product.product-component', $data)->extends('components.layouts.main')->section('content-wrapper');
    }

    // public function generateSlug()
    // {
    //     $this->slug = SlugService::createSlug(Product::class, 'slug', $this->name);
    // }


    public function cancel()
    {
        $this->updateMode = false;
    }


    public function detail($id)
    {
        $data = Product::where('id',$id)->first();
        $this->image = $data->image;
        $this->slug = $data->slug;
        $this->brandId = $data->brandId;
        $this->name = $data->name;
        $this->dimensions = $data->dimensions;
        $this->display = $data->display;
        $this->os = $data->os;
        $this->chipset = $data->chipset;
        $this->cpu = $data->cpu;
        $this->memory = $data->memory;
        $this->battery = $data->battery;
        $this->description = $data->description;
        $this->price = $data->price;
        $this->stock = $data->stock;
        $this->release_date = $data->release_date;

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $this->product = Product::where('id',$id)->first();
        $this->product_id = $id;
        $this->name = $this->product->name;
        $this->brand_id = $this->product->brand_id;
        $this->name = $this->product->name;
        $this->dimensions = $this->product->dimensions;
        $this->display = $this->product->display;
        $this->os = $this->product->os;
        $this->chipset = $this->product->chipset;
        $this->cpu = $this->product->cpu;
        $this->memory = $this->product->memory;
        $this->battery = $this->product->battery;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
        $this->stock = $this->product->stock;
        $this->oldImage = $this->product->image;
        $this->release_date = $this->product->release_date;
    }

    public function update(Request $request)
    {
        $validated = $this->validate([
            "brand_id" => "required",
            "name" => "required",
            "dimensions" => "required",
            "display" => "required",
            "os" => "required",
            "chipset" => "required",
            "cpu" => "required",
            "memory" => "required",
            "battery" => "required",
            "description" => "required",
            "price" => "required|max:11",
            "stock" => "required|max:11",
            // "image" => "nullable|sometimes|image|max:1024|mimes:jpg,jpeg,png,gif'",
            "release_date" => "nullable",
        ]);

            $image = $this->product->image;
            if($this->mage) {
                $image = $this->image->store("public/images");
            }

            $request->merge(['slug' => strtolower(str_replace(' ', '-', $request->name))]);
            $this->product->update([
                "brand_id" => $this->brand_id,
                "slug" => $this->slug,
                "name" => $this->name,
                "dimensions" => $this->dimensions,
                "display" => $this->display,
                "os" => $this->os,
                "chipset" => $this->chipset,
                "cpu" => $this->cpu,
                "memory" => $this->memory,
                "battery" => $this->battery,
                "description" => $this->description,
                "price" => $this->price,
                "stock" => $this->stock,
                "image" => $image,
                "release_date" => $this->release_date,
            ]);
            $this->updateMode = false;
            session()->flash('success', 'Brand updated successfully!.');
    }

    public function delete($id)
    {
        if($id){
            Product::where('id',$id)->delete();
            session()->flash('success', 'Users Deleted Successfully.');
        }
    }
}
