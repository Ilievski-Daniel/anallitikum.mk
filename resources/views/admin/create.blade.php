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
                <h1>Add Post</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="contact-form">
                    
                {!! form::open(array('route' => 'post.store','data-parsley-validate'=>'','method' => 'POST', 'enctype' => 'multipart/form-data'))!!}
                {{ form::label('title','Tittle')}}
                {{ form::text('title', NULL,array('class'=>'form-control','required'=> '','maxlength'=>'2251'))}}
                
                {{ form::label('cover_image','Upload Image')}}
                {{Form::file('cover_image')}}

                {{ form::label('body','Body')}}
                {{ Form::textarea('body', Null,['class' => 'form-control','placeholder' =>'Body']) }}

                {{ form::label('category_id','Category')}}
                <select name="category_id" class="form-control" id="">

                    @foreach ($cat as $key => $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach

                </select>

                {{ form::submit('Add Post', array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}
                {!! form::close() !!}
            </div>
        </div>
    </div>
</body>
</html>