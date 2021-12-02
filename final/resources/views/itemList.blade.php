





<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Category</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $item)
    <tr>
      <td> {{ $item->category}}</td>
      <td> {{ $item->name}}</td>
      <td> {{ $item->price}}</td>
      <td> {{ $item->quantity}}</td>
      <td> {{ $item->image}}</td>
      <td>
        <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
        <a href="{{url('/edit/'.$item->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{url('/delete/'.$item->id)}}" class="btn btn-sm btn-danger" method="POST">Delete</a>
        <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a> -->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
