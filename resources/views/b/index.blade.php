<x-admin>
 <div class="float-end">
        <a href="{{route('b.create')}}" class="btn btn btn-primary">create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">date</th>
            <th scope="col">slug</th>
            <th scope="col">subcategory</th>
            <th scope="col">shortdesc</th>
            <th scope="col">desc</th>
            <th scope="col">img</th>
             <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->date}}</td>
                <td>{{$blog->slug}}</td>
                <td>{{$blog->subcategory_id}}</td>
                <td>{{$blog->shortdesc}}</td>
                <td>{{$blog->desc}}</td>
                <td>
                    <img src="{{ asset('blog/'.$blog->image) }}" alt="{{$blog->filename }}" style="width:50px;height:50px;">
                </td>
                <td>
                    <form action="{{ route('b.destroy', $blog) }}" method="POST">
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

