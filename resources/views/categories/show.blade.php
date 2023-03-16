@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($category->name) ? $category->name : 'Category' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('categories.category.destroy', $category->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('categories.category.index') }}" class="btn btn-primary mr-2" title="Show All Category">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Category
                    </a>

                 
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $category->name }}</dd>
            <dt>Image</dt>
            <dd>{{ asset('storage/' . $category->image) }}</dd>
            <dt>Is Active</dt>
            <dd>{{ ($category->is_active) ? 'Yes' : 'No' }}</dd>
            <dt>Description</dt>
            <dd>{{ $category->description }}</dd>

        </dl>

    </div>
</div>

@endsection
