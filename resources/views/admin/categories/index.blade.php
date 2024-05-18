@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Categories') }}</div>

                    <div class="card-body">
                        @if(auth()->user()->role == 'admin')
                            <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">{{ __('Add Category') }}</a>
                        @endif

                        <ul class="list-group">
                            @foreach ($categories as $category)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        {{ $category->name }}
                                        @if ($category->children)
                                            @include('admin.categories.partials.children', ['children' => $category->children])
                                        @endif
                                    </div>
                                    @if(auth()->user()->role == 'admin')
                                        <div>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
