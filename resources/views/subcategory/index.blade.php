<x-admin>
    <div class="float-end">
        <a href="{{route('subcategory.create')}}" class="btn btn btn-primary">create</a>
    </div>
    <table class="table">
        <thead>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">slug</th>
            <th scope="col">category</th>
            <th scope="col">action</th>
        </thead>

    <tbody>
        @foreach ($subcategories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>{{$category->category->name}}</td>
            <td>
                <form action="{{route('subcategory.destroy',$category)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn  btn-sm btn-danger">delete</button>
        </tr>

        @endforeach
    </tbody>
</table>


</x-admin>
