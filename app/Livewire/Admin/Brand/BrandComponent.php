<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BrandComponent extends Component
{

    use WithPagination;


    #[Rule('required|min:3')]
    public $name;

    public $slug;

    public $search = '';
    public $brand_id;
    public $updateMode = false;

    public function generateSlug()
    {
        $this->slug = SlugService::createSlug(Brand::class, 'slug', $this->name);
    }

    public function render()
    {
        $data = [
            'title' => 'Brand',
            'data' => Brand::latest()->where('name','Like','%'. $this->search .'%')->paginate(10),
        ];
        return view('livewire.admin.brand.brand-component', $data)->extends('components.layouts.main')->section('content-wrapper');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->slug = '';
    }

    public function create(Request $request)
    {
        $validateData = $this->validate([
            'name' => 'required',
        ]);

        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug)
        ]);

        session()->flash('success', 'Brand created successfully!');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $data = Brand::where('id',$id)->first();
        $this->brand_id = $id;
        $this->name = $data->name;

    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
        ]);

        if ($this->brand_id) {
            $data = Brand::find($this->brand_id);
            $data->update([
                'name' => $this->name,
                'slug' => Str::slug($this->slug),
            ]);
            $this->updateMode = false;
            session()->flash('success', 'Brand updated successfully!.');
            $this->resetInputFields();

        }
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function delete($id)
    {
        if($id){
            Brand::where('id',$id)->delete();
            session()->flash('success', 'Users Deleted Successfully.');
        }
    }
}
