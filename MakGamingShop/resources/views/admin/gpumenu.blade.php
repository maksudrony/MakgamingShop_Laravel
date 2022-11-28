<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller mt-5">
        @include("admin.navbar")
                <div class="mx-5 col-lg-3">
                    <form action="{{ url('/uploadgpu') }}" method="post" enctype="multipart/form-data">

                        @csrf 
                         {{-- we want to upload data to the database
                         thats why we used csrf --}}
        
                        <div class="mb-3">
                            <label for="">Title: </label>
                            <input class="form-control bg-light text-dark" type="text" name="title" placeholder="write a title" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Price: </label>
                            <input class="form-control bg-light text-dark" type="num" name="price" placeholder="write a price" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Image: </label>
                            <input class="form-control bg-light text-dark" type="file" name="image" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Description: </label>
                            <textarea class="form-control bg-light text-dark" name="description" placeholder="write description" id="" cols="30" rows="10"></textarea>
                            
                        </div>
                        <div class="mb-3">
                            <input class="form-control btn btn-primary" type="submit" value="save">
                        </div>
                    </form>


                    <div class="container-fluid mt-5">
                        <table class="table-bordered text-center table-responsive table-primary break-words">
                            <thead>
                              <tr>
                                <th class="col-lg-3 col-md-6" scope="">Gpu Title</th>
                                <th class="" scope="">Price</th>
                                <th class="" scope="">Description</th>
                                <th class="" scope="">Image</th>
                                <th class="" scope="">Action</th>
                                <th class="" scope="">Action2</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $data )
                              <tr class="">
                                <th scope="row" style="" class="">{{ $data ->title }}</th>
                                <td>{{ $data ->price }}</td>
                                <td>{{ $data ->description }}</td>
                                <td><img height="200px" width="200px" src="/gpuimage/{{ $data -> image }}" alt=""></td>
                                <td><a href="{{ url('/deletegpumenu', $data ->id) }}">Delete</a></td>
                                <td><a href="{{ url('/updategpumenu', $data ->id) }}">Update</a></td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>

                    </div>
                  


                    
                
                    {{-- <table class="table table-responsive table-striped table-primary table-bordered mt-5">
                        
                            <tr class="text-center">
                                <th>Gpu Title</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                                <th>Action2</th>
                            </tr>

                        @foreach ($data as $data )
                            
                        
                        <tr class="">
                            <td>{{ $data ->title }}</td>
                            <td>{{ $data ->price }}</td>
                            <td>{{ $data ->description }}</td>
                            <td><img height="200px" width="200px" src="/gpuimage/{{ $data -> image }}" alt=""></td>
                            <td><a href="{{ url('/deletegpumenu', $data ->id) }}">Delete</a></td>
                            <td><a href="{{ url('/updategpumenu', $data ->id) }}">Update</a></td>
                        </tr>
                        @endforeach
                    </table> --}}
    </div>
    
    </div>
    <!-- plugins:js -->
    @include("admin.adminscript")
    <!-- End custom js for this page -->
  </body>
</html>