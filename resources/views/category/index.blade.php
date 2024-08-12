<x-admin>
    <div class="float-end">
        <a href="{{route('category.create')}}" class="btn btn btn-primary">creat</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">slug</th>
                <th scope="col">action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as  $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <form action="{{ route('category.destroy', $category) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</x-admin>
