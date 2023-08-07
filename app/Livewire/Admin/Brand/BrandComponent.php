<?php

namespace App\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Rule;


class BrandComponent extends Component
{

    public $postId;

    public $isOpen = 0;

    #[Rule('required|min:3')]
    public $name;

    #[Rule('required|min:3')]
    public $slug;

    #[Rule('nullable')]
    public $status;

    public function render()
    {
        $data = [
            'title' => 'Brand',
            'data' => Brand::all(),
        ];
        return view('livewire.admin.brand.brand-component', $data)->extends('components.layouts.main')->section('content-wrapper');
    }

    public function create()
    {
        $this->openModal();
    }
    public function openModal()
    {
        $this->resetValidation();

        $this->isOpen = true;
    }
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function store()
    {
        $this->validate();

        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1':'0',
        ]);

        session()->flash('success', 'Post created successfully.');

        $this->reset('name','slug', 'status');
        $this->closeModal();
    }

    public function edit($id)
    {
        $post = Brand::findOrFail($id);
        $this->postId = $id;
        $this->name = $post->name;
        $this->slug = Str::slug($this->slug);
        $this->status = $this->status == true ? '1':'0';

        $this->openModal();
    }

    public function update()
    {
        if ($this->postId) {
            $post = Brand::findOrFail($this->postId);
            $post->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'status' => $this->status == true ? '1':'0',
            ]);
            session()->flash('success', 'Post updated successfully.');
            $this->closeModal();
            $this->reset('name', 'slug','status', 'postId');
        }
    }

    public function delete($id)
    {
        Brand::find($id)->delete();
        session()->flash('success', 'Post deleted successfully.');
        $this->reset('name','slug', 'status');
    }

}
