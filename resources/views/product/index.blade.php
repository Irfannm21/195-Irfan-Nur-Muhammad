@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ $title ?? __('Blank Page') }}</h1>

    <!-- Main Content goes here -->

    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">New Product</a>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table-bordered table-stripped table">
        <thead>
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>Name</th>
                <th>Date</th>
                <th>Type</th>
                <th>Purchase Prices</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $result->code }}</td>
                    <td>{{ $result->name }}</td>
                    <td>{{ $result->date }}</td>
                    <td>{{ $result->types }}</td>
                    <td>{{ 'Rp ' . number_format($result->price, 0, ',', '.') }}</td>
                    <td>
                        <div class="btn-group">
                            <button class="dropdown-toggle btn-primary" href="#" data-toggle="collapse"
                                data-target="#collapseTwo{{ $result->id }}" aria-expanded="false"
                                aria-controls="collapseTwo{{ $result->id }}">
                                <span>{{ __('Action') }}</span></button>
                            </button>
                        </div>
                        <div id="collapseTwo{{ $result->id }}" class="collapse" aria-labelledby="headingTwo"
                            style="width:70px;">

                            <div class="collapse-inner rounded bg-white py-2">
                                <a class="dropdown-item" href="{{ route('product.show', $result->id) }}">
                                    <button type="button" class="btn btn-sm btn-success">
                                        <i class="fas fa-fw fa-eye"></i>
                                        <span>{{ __('Show') }}</span></button>
                                </a>
                                <a class="dropdown-item" href="{{ route('product.edit', $result->id) }}">
                                    <button type="button" class="btn btn-sm btn-warning">
                                        <i class="fas fa-fw fa-pencil-alt"></i>
                                        <span>{{ __('Edit') }}</span></button>
                                </a>
                                <div class="dropdown-item">
                                    <form action="{{ route('product.destroy', $result->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure to delete this?')"> <i
                                                class="fas fa-fw fa-trash"></i>
                                            <span>{{ __('Delete') }}</span></button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $results->links() }}

    <!-- End of Main Content -->
@endsection

@push('notif')
    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('warning'))
        <div class="alert alert-warning border-left-warning alert-dismissible fade show" role="alert">
            {{ session('warning') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
@endpush
