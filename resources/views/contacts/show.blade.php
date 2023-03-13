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

                    <a href="{{ route('contacts.contact.create') }}" class="btn btn-success mr-2" title="Create New Contact">
                        <i class=" fas fa-fw fa-plus" aria-hidden="true"></i>
                        Create New Contact
                    </a>

                    <a href="{{ route('contacts.contact.edit', $contact->id ) }}" class="btn btn-primary mr-2" title="Edit Contact">
                        <i class=" fas fa-fw fa-pencil-alt" aria-hidden="true"></i>
                        Edit Contact
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Contact" onclick="return confirm(&quot;Click Ok to delete Contact.?&quot;)">
                        <i class=" fas fa-fw fa-trash-alt" aria-hidden="true"></i>
                        Delete Contact
                    </button>
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

        </dl>

    </div>
</div>

@endsection
