<?php

namespace App\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class CategoryComponent extends Component
{

    use WithPagination;

    #[Rule('required')]
    public $name;

    #[Rule('ruequired')]
    public $slug;

    public $category_id;
    public $updateMode = false;

    public function render()
    {
        $data = [
            'title' => 'Category',
            'data' => Category::latest()->paginate(5),
        ];
        return view('livewire.admin.category.category-component', $data)->extends('components.layouts.main')->section('content-wrapper');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->slug = '';
    }

    public function create()
    {
        $validateData = $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        Category::create($validateData);

        session()->flash('success', 'Created.');
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $data = Category::where('id',$id)->first();
        $this->category_id = $id;
        $this->name = $data->name;
        $this->slug = Str::slug($data->slug);

    }

    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        if ($this->category_id) {
            $data = Category::find($this->category_id);
            $data->update([
                'name' => $this->name,
                'slug' => Str::slug($this->slug),
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Updated Successfully.');
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
            Category::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }

}
