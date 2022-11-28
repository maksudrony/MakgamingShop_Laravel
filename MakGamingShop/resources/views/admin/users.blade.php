<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

            <div class="mx-5 mt-5">
                <table class="table table-primary">
                    <thead>
                      <tr class="">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $data )
                      <tr>
                        <td>{{ $data -> name }}</td>
                        <td>{{ $data -> email }}</td>

                        @if ( $data -> usertype =="0" )
                        <td><a href="{{ url('/deleteuser', $data->id) }}" class="text-decoration-none">delete</a></td>
                        @else
                        <td>not allowed</td>
                        @endif
                        
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
            </div>

        </div>
        
        
        <!-- plugins:js -->
        @include("admin.adminscript");
        <!-- End custom js for this page -->
      </body>
    </html>
</body>
</html>