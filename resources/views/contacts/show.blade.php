@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">

        <h5  class="my-1 float-left">{{ isset($contact->name) ? $contact->name : 'Contact' }}</h5>

        <div class="float-right">

            <form method="POST" action="{!! route('contacts.contact.destroy', $contact->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('contacts.contact.index') }}" class="btn btn-primary mr-2" title="Show All Contact">
                        <i class=" fas fa-fw fa-th-list" aria-hidden="true"></i>
                        Show All Contact
                    </a>

                </div>
            </form>

        </div>

    </div>

    <div class="card-body">
        <dl class="dl-horizontal">
            <dt>Name</dt>
            <dd>{{ $contact->name }}</dd>
            <dt>Email</dt>
            <dd>{{ $contact->email }}</dd>
            <dt>Message</dt>
            <dd>{{ $contact->message }}</dd>
            <dt>Phone</dt>
            <dd>{{ $contact->phone }}</dd>
            <dt>Is Read</dt>
            <dd>{{ ($contact->is_read) ? 'Yes' : 'No' }}</dd>

        </dl>

    </div>
</div>

@endsection
