<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Cat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add Cat</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <a href="{{ route('blog.index')}}" class="btn btn-primary btn-block">See All Post</a>
            </div>
          </div>
        <div class="row">
            <div class="col-md-8" style="margin-top: 22px;">
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>name</th>
                        <th>Created</th>
                        <th>Option</th>
                        
                    </thead>
                    <tbody>
                        <?php $no= 1;?>
                        @foreach ($cat as $key => $value)
                            <tr>
                                <th>{{ $no++}}</th>
                                <th>{{$value->name}}</th>
                                <th>{{ date('M j, Y', strtotime($value->created_at))}}</th>
                                <th class="" width"130px">
                                    
                                    <a href="{{ route('category.delete', $value->id) }}" class="btn btn-danger btn-sm">
                                        <span class="bi bi-trash"></span>
                                    </a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                {!! Form::open(array('route'=>'category.create','data-parsley-validate'=> ''))  !!}

                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', Null,array('class'=>'form-control','required'=> '','maxlenght'=>'225')) !!}

                {!! Form::submit('Add Category', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px')) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</body>
</html>