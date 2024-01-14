<table class="table caption-top">
    <caption>Total Product : {{ $data->count() }}</caption>
    <caption>List of products</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $d->id }}</td>
          <td>{{ $d->name }}</td>
          <td><button class="btn btn-warning" onclick="show({{ $d->id }})">Edit</button> <button class="btn btn-danger" onclick="destroy({{ $d->id }})">Delete</button></td>
        </tr>

        @endforeach
    </tbody>
  </table>
