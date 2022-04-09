<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Posts</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <a href="{{ route('blog.index')}}" class="btn btn-primary btn-block">See All Post</a>
            </div>
          </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Body</th>
                        <th>Image</th>
                        <th>Create At</th>
                        <th class="text-center" width"130px">
                            <a href="{{ route('post.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-square-fill"></i>
                            </a>
                        </th>
                    </thead>
                    <tbody>
                        <?php $no= 1;?>
                        @foreach ($blog as $key => $value)
                            <tr>
                                <th>{{ $no++}}</th>
                                <th>{{ $value->title}}</th>
                                <th>{{ $value->Category['name']}}</th>
                                <th>{{ substr($value->body,0,40)}}{{ strlen($value->body) > 40 ? "..." : ""}}</th>
                                <th>
                                    <img class="img-rounded corners" width="20px" height="20px" src="{{asset('image/' . $value->cover_image)}}" alt="img">
                                </th>
                                <th>{{ date('M j, Y', strtotime($value->created_at))}}</th>
                                <th class="" width"130px">
                                    <a href="{{ route('post.show', $value->id) }}" class="btn btn-primary btn-sm">
                                        <span class="bi bi-eye"></span>
                                    </a>
                                    <a href="{{ route('post.edit', $value->id) }}" class="btn btn-dark btn-sm">
                                        <span class="bi bi-pencil"></span>
                                    </a>
                                    <a href="{{ route('post.delete', $value->id) }}" class="btn btn-danger btn-sm">
                                        <span class="bi bi-trash"></span>
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>