@extends('layouts.app')

@section('content')

    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5  class="my-1 float-left">Create New Package</h5>

            <div class="btn-group btn-group-sm " role="group">
                <a href="{{ route('packages.package.index') }}" class="btn btn-primary" title="Show All Package">
                    <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                    Show All Package
                </a>
            </div>

        </div>

        <div class="card-body">



            <form method="POST" action="{{ route('packages.package.store') }}" accept-charset="UTF-8" id="create_package_form" name="create_package_form" class="form-horizontal" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include ('packages.form', [
                                        'package' => null,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                </div>

            </form>

        </div>
    </div>

@endsection


