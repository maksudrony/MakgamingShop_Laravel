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
            <form action="{{ url('/uploadkeyboard') }}" method="post" enctype="multipart/form-data">

                @csrf 
                 {{-- we want to upload data to the database
                 thats why we used csrf --}}

                <div class="mb-3">
                    <label for="">Title: </label>
                    <input class="form-control bg-light text-dark" type="text" name="ktitle" placeholder="write a title" required>
                </div>
                <div class="mb-3">
                    <label for="">Price: </label>
                    <input class="form-control bg-light text-dark" type="num" name="kprice" placeholder="write a price" required>
                </div>
                <div class="mb-3">
                    <label for="">Image: </label>
                    <input class="form-control bg-light text-dark" type="file" name="kimage" required>
                </div>
                <div class="mb-3">
                    <label for="">Description: </label>
                    <textarea class="form-control bg-light text-dark" name="kdescription" placeholder="write description" id="" cols="40" rows="10"></textarea>
                    
                </div>
                <div class="mb-3">
                    <input class="form-control btn btn-primary" type="submit" value="save">
                </div>
            </form>

            <table class="table table-primary table-bordered table-responsive">
                <tr>
                    <th class="">Keyboard Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Action2</th>
                </tr>
    
                @foreach ($data as $data )
                    
                
                <tr>
                    <td>{{ $data ->ktitle }}</td>
                    <td>{{ $data ->kprice }}</td>
                    <td>{{ $data ->kdescription }}</td>
                    <td><img height="200px" width="200px" src="/keyboardimage/{{ $data ->kimage }}" alt=""></td>
                    <td><a href="{{ url('/deletekeyboardmenu', $data ->id) }}">Delete</a></td>
                    <td><a href="{{ url('/updatekeyboardmenu', $data ->id) }}">Update</a></td>
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