@extends('front.layout')

@section('title', $title)

@section('content')

<!-- property area -->
<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
   <div class="container">
       <div class="row">
           <div class="col-sm-10 col-sm-offset-1 profiel-container">

               <form action="{{ action('Front\Painter\ProfileController@postChangePass') }}" method="POST" enctype='multipart/form-data'>
                   <div class="clear">

                       <div class="col-sm-10 col-sm-offset-1">
                           <h4 class="text-center">{{ $title }}</h4>
                           <div class="form-group">
                               <label for="name">Город</label>
                               <select class="form-control" name="city_id"  required>
                                   @foreach ($ar_city as $k=>$v)
                                       <option value="{{ $k }}" {{ $item->city_id == $k ? 'selected' : null }}>{{ $v }}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group">
                               <label for="password">Пароль</label>
                               <input type="password" class="form-control" id="password" name='password' required>
                           </div>
                       </div>
                   </div>
                   <div class="col-sm-5 col-sm-offset-1">
                       <input type='submit' class='btn btn-finish btn-primary' name='finish' value='Сохранить' />
                   </div>
                   <br>
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
               </form>

           </div>
       </div><!-- end row -->

   </div>
</div>


@endsection
