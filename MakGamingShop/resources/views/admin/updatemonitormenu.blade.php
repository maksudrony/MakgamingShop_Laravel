<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <!-- Required meta tags -->
    @include("admin.admincss");
  </head>
  <body>
    <div class="container-scroller">
    @include("admin.navbar");
    

    <div class="mx-5">
        <form action="{{ url('/updatemonitor', $data->id) }}" method="post" enctype="multipart/form-data">

            @csrf 
             {{-- we want to upload data to the database
             thats why we used csrf --}}

            <div class="mb-3">
                <label for="">Title: </label>
                <input class="form-control bg-light text-dark" type="text" name="mtitle" value="{{ $data->mtitle }}">
            </div>
            <div class="mb-3">
                <label for="">Price: </label>
                <input class="form-control bg-light text-dark" type="num" name="mprice" value="{{ $data->mprice }}" >
            </div>
            <div class="mb-3">
                <label for="">Old Image: </label>
                <img src="/monitorimage/{{ $data->mimage }}" height="250px" width="250px" alt="">
            </div>
            <div class="mb-3">
                <label for="">Image: </label>
                <input class="form-control bg-light text-dark" type="file" name="mimage">
            </div>
            <div class="mb-3">
                <label for="">Description: </label>
                <textarea class="form-control bg-light text-dark" name="mdescription" value="{{ $data->mdescription }}" id="" cols="40" rows="10"></textarea>
                
            </div>
            <div class="mb-3">
                <input class="form-control btn btn-primary" type="submit" value="save">
            </div>
        </form>

    </div>
    </div>



    <!-- plugins:js -->
    @include("admin.adminscript");
    <!-- End custom js for this page -->
  </body>
</html>