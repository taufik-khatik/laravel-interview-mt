<ul class="list-group mt-2">
    @foreach ($children as $child)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div>
                {{ $child->name }}
                @if ($child->children)
                    @include('admin.categories.partials.children', ['children' => $child->children])
                @endif
            </div>
            @if(auth()->user()->role == 'admin')
                <div>
                    <a href="{{ route('categories.edit', $child->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('categories.destroy', $child->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </div>
            @endif
        </li>
    @endforeach
</ul>
