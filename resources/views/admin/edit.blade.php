<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    Update Post
                </h1>
            </div>
        </div>
        
        {!! form::model($blog, ['route' => ['post.update', $blog->id], 'method'=> 'POST']) !!}
        <div class="row">
            
            <div class="col-md-8">
                    {{ form::label('title','Tittle')}}
                {{ form::text('title', NULL,['class'=>'form-control input-lg'])}}
           
                {{ form::label('body','Body', ['class'=> 'form-spacing-top'])}}
                {{Form::textarea('body', Null,['class' => 'form-control','placeholder' =>'Body'])}}
                
                {{ form::label('category_id','Category',['class'=>'form-spacing-top'])}}
                <select name="category_id" class="form-control" id="">
                    <?php $selectedvalue = $blog->category_id ?>
                    @foreach ($cat as $key => $value)
                        <option value="{{$value->id}} {{$selectedvalue == $value->id ? 'selected="selected"' : ''}}">{{$value->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-md-4">
                <div class="well">
                    <dl class="dl-horizontal">
                        <dt>Create At:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($blog->created_at))}}</dd>
                    </dl>
                    <dl class="dl-horizontal">
                        <dt>Update At:</dt>
                        <dd>{{ date('M j, Y h:ia', strtotime($blog->updated_at))}}</dd>
                    </dl>
                </div>
            </div>

        <div class="row">
            <div class="col-md-6">
                {{Html::linkroute('admin', 'Cancel', Null,array('class'=>'btn btn-danger'))}}
            </div>
            <div class="col-md-6">
                {{ form::submit('Save Changes' , ['class'=>'btn btn-success'])}}
            </div>
        </div>
                {!! form::close() !!}
        </div>
    </div>
</body>
</html>