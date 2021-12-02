<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Item List</title>
  </head>
  <body>
    @include("nav")
    <a href="{{url('/register/')}}" class="btn btn-sm btn-warning">Register</a>
    <a href="{{url('/login/')}}" class="btn btn-sm btn-warning">Login As User</a>
    <a href="{{url('/login/')}}" class="btn btn-sm btn-warning">Login As Admin</a>
    @if($layout == 'index')
       <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7"></section>
                    @include("itemList")
                <section class ="col-md-5"></section>
            </div>
       </div>
    @elseif($layout == "create")
    <div class="container-fluid mt-4">
            <div class="row">
                <section class="col"></section>
                    @include("itemList")
                <section class ="col">
                <form action = "{{ url('/store') }}" method = "post">
                @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <input name = "category"type="text" class="form-control"  placeholder="Enter category">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input name = "name"type="text" class="form-control"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input name = "price"type="number" class="form-control"  placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input name = "quantity"type="number" class="form-control"  placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input name = "image"type="image" class="form-control"  placeholder="Enter image">
                    </div>
                    <input type="submit" class="btn btn-info" value = "Save">
                    <input type="reset" class="btn btn-warning" value = "Reset">
                </form>
                </section>
            </div>
       </div>
    @elseif($layout == 'show')
    <div class="container-fluid mt-4">
            <div class="row">
                <section class="col"></section>
                    @include("itemList")
                <section class ="col"></section>
            </div>
       </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
            <div class="row">
                <section class="col"></section>
                    @include("itemList")
                <section class ="col"> 
                <form action = " {{ url('/update/'.$item->id) }} " method = "post">
                @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <input value = "{{ $item->category }}" name = "category"type="text" class="form-control"  placeholder="Enter category">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input value = "{{ $item->name }}"name = "name"type="text" class="form-control"  placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input value = "{{ $item->price }}"name = "price"type="number" class="form-control"  placeholder="Enter price">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input value = "{{ $item->quantity }}"name = "quantity"type="number" class="form-control"  placeholder="Enter quantity">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input value = "{{ $item->image }}"name = "image"type="image" class="form-control"  placeholder="Enter image">
                    </div>
                    <input type="submit" class="btn btn-info" value = "Update">
                    <input type="reset" class="btn btn-warning" value = "Reset">
                </form>
                </section>
            </div>
       </div>
       @elseif($layout == 'delete')
       <div class="container-fluid mt-4">
            <div class="row">
                <section class="col"></section>
                    @include("itemList")
                <section class ="col"></section>
            </div>
       </div>
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>