<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss");
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar");

        <div class="mx-5 col-lg-3">
            <form action="{{ url('/uploadram') }}" method="post" enctype="multipart/form-data">

                @csrf 
                 {{-- we want to upload data to the database
                 thats why we used csrf --}}

                <div class="mb-3">
                    <label for="">Title: </label>
                    <input class="form-control bg-light text-dark" type="text" name="rtitle" placeholder="write a title" required>
                </div>
                <div class="mb-3">
                    <label for="">Price: </label>
                    <input class="form-control bg-light text-dark" type="num" name="rprice" placeholder="write a price" required>
                </div>
                <div class="mb-3">
                    <label for="">Image: </label>
                    <input class="form-control bg-light text-dark" type="file" name="rimage" required>
                </div>
                <div class="mb-3">
                    <label for="">Description: </label>
                    <textarea class="form-control bg-light text-dark" name="rdescription" placeholder="write description" id="" cols="30" rows="10"></textarea>
                    
                </div>
                <div class="mb-3">
                    <input class="form-control btn btn-primary" type="submit" value="save">
                </div>
            </form>

            <table class="table table-primary table-bordered table-responsive mt-5">
                <tr>
                    <th class="">Ram Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Action2</th>
                </tr>
    
                @foreach ($data as $data )
                    
                
                <tr>
                    <td>{{ $data ->rtitle }}</td>
                    <td>{{ $data ->rprice }}</td>
                    <td>{{ $data ->rdescription }}</td>
                    <td><img height="200px" width="200px" src="/ramimage/{{ $data ->rimage }}" alt=""></td>
                    <td><a href="{{ url('/deleterammenu', $data ->id) }}">Delete</a></td>
                    <td><a href="{{ url('/updaterammenu', $data ->id) }}">Update</a></td>
                </tr>
                @endforeach
            </table>
        </div>

    </div>
    
    
    <!-- plugins:js -->
    @include("admin.adminscript");
    <!-- End custom js for this page -->
  </body>
</html>