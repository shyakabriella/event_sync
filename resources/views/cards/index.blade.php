@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cards</h2>
            </div>
            <div class="pull-right">
                @can('card-create')
                <a class="btn btn-success" href="{{ route('cards.create') }}"> Create New Card</a>
                @endcan
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Serial Number</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cards as $card)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $card->serialnumber }}</td>
            <td>
                <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('cards.show', $card->id) }}">Show</a>
                    @can('card-edit')
                    <a class="btn btn-primary" href="{{ route('cards.edit', $card->id) }}">Edit</a>
                    @endcan

                    @csrf
                    @method('DELETE')
                    @can('card-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $cards->links() !!}

<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection
