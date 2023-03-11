@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($package->title) ? $package->title : 'Package' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('packages.package.destroy', $package->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('packages.package.index') }}" class="btn btn-primary mr-2" title="Show All Package">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Package
                    </a>

                    <a href="{{ route('packages.package.create') }}" class="btn btn-success mr-2" title="Create New Package">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Package
                    </a>

                    <a href="{{ route('packages.package.edit', $package->id ) }}" class="btn btn-primary mr-2" title="Edit Package">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Package
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Package" onclick="return confirm(&quot;Click Ok to delete Package.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Package
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Title</dt>
            <dd>{{ $package->title }}</dd>
            <dt>Image</dt>
            <dd>{{ asset('storage/' . $package->image) }}</dd>
            <dt>Discription</dt>
            <dd>{{ $package->discription }}</dd>
            <dt>Notes</dt>
            <dd>{{ $package->notes }}</dd>
            <dt>Price</dt>
            <dd>{{ $package->price }}</dd>
            <dt>Time</dt>
            <dd>{{ $package->time }}</dd>
            <dt>Category</dt>
            <dd>{{ optional($package->category)->name }}</dd>

        </dl>

    </div>
</div>

@endsection
