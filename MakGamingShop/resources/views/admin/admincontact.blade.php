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

    <div class="mx-5">
        <table class="table table-primary table-bordered table-responsive mx-5">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>

            @foreach ($data as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->phone }}</td>
                <td>{{ $data->message }}</td>
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