<!doctype html>
<html lang="en">

<head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    @php
    if(isset($row[0]))
    $type ="text";
    else
    $type ="password";
    @endphp
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-8">
                <form enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"
                            @if(isset($row[0])) value="{{$row[0]->email}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="{{$type}}" name="password" id="password" class="form-control"
                            placeholder="Enter Password" @if (isset($row[0])) value="{{$row[0]->password}}" @endif>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" id="image" name="image[]" class="form-control" multiple>

                        @if (isset($row[0]))
                        @if ($row[0]->image !='')
                        @php
                        $image_arr = explode(',',$row[0]->image);
                        @endphp
                        <div class="p-4">
                            @foreach ($image_arr as $img)
                            <span class="p-2">
                                <img src="{{asset('storage/media/'.$img)}}" width="30px" alt="">
                            </span>
                            @endforeach
                        </div>
                        @endif
                        @endif
                    </div>
                    @if (isset($row[0]))
                    <a href="/" class="btn btn-secondary">Back</a>
                    <input type="hidden" id="id" name="id" value="{{$row[0]->id}}">
                    <button type="submit" id="submit" class="btn btn-primary"> update </button>
                    @else
                    <button type="submit" id="submit" class="btn btn-primary"> Submit </button>
                    @endif

                </form>

            </div>
        </div>
    </div>
    <div class="container mt-5">
        <input type="search" name="search" id="search" placeholder="Search Something Here" class="form-control">
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-border">
                <tbody class="all-data">
                    <tr>
                        <td> ID </td>
                        <td> Email </td>
                        <td> Password </td>
                        <td> Image </td>
                        <td> Action </td>
                    </tr>
                    @foreach ($data as $row)
                    <tr>
                        <td> {{$row->id}} </td>
                        <td> {{$row->email}} </td>
                        <td> {{$row->password}} </td>
                        @php
                        $image_arr = explode(',',$row->image);
                        @endphp
                        <td>
                            @foreach($image_arr as $img)
                            <img src="{{asset('storage/media/'.$img)}}" width="100px" />
                            @endforeach
                        </td>
                        <td> <a href="{{url('/edit/'.$row->id)}}" class="btn btn-secondary">edit</a>
                            <a href="{{url('/delete/'.$row->id)}}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                      @endforeach
                </tbody>
                    <tbody id='content' class="searchdata">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
        <script>
            $(document).ready(function(){
                $('#search').on('keyup',function(){
                    $value=$(this).val();
                    if($value){
                        $('.all-data').hide();
                        $('.searchdata').show();
                    }
                    else{
                        $('.all-data').show();
                        $('.searchdata').hide();
                    }
                    $.ajax({
                        type:'get',
                        url:'{{URL::to('search')}}',
                        data:{'search':$value},
                        success:function(data){
                            // console.log(data);
                            $('#content').html(data);
                        }
                    });
                });
            $('form').submit(function(e){
                e.preventDefault(); 
                var formData =new FormData(this);
               
                $.ajax({
                    url:'/manage',
                    data:formData,
                    type:'post',
                    success:function(result){
                        alert(result)
                    },
                    cache:false,
                    contentType:false,
                    processData:false
                });
            });
    });
    </script>



</body>

</html>