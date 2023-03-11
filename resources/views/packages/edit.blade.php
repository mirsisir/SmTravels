@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">{{ !empty($package->title) ? $package->title : 'Package' }}</h5>

            <div class="btn-group btn-group-sm float-right" role="group">

                <a href="{{ route('packages.package.index') }}" class="btn btn-primary mr-2" title="Show All Package">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Package
                </a>

                <a href="{{ route('packages.package.create') }}" class="btn btn-success" title="Create New Package">
                    <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                    Create New Package
                </a>

            </div>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('packages.package.update', $package->id) }}" id="edit_package_form" name="edit_package_form" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('packages.form', [
                                        'package' => $package,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection
