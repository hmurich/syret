@extends('front.layout')

@section('title', $title)

@section('content')

<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
   <div class="container">
       <div class="row">
           <div class="col-sm-10 col-sm-offset-1 profiel-container">

               <form action="{{ action('Front\Painter\ProfileController@postProfile') }}" method="POST" enctype='multipart/form-data'>
                   <div class="profiel-header">
                       <h3>
                           <b>Заполните</b> Ваши данные<br>
                           <small>Данные будут видны пользователям.</small>
                       </h3>
                       <hr>
                   </div>

                   <div class="clear">
                       <h4 class="text-center">Профиль</h4>
                       <div class="col-sm-3 col-sm-offset-1">
                           <div class="picture-container">
                               <div class="picture">
                                   <img src="/{{ $item->logo ? $item->logo : 'assets/img/avatar.png' }}"
                                        class="picture-src" id="wizardPicturePreview" style=" height: 100%;"/>
                                   <input type="file" id="wizard-picture" name='logo' onchange="previewFile()">
                               </div>
                               <h6>Выберите лого</h6>
                           </div>
                       </div>

                       <div class="col-sm-3 padding-top-25">
                           <div class="form-group">
                               <label>Имя или ник <small>(обязательно)</small></label>
                               <input value="{{ $item->name }}" type="text" class="form-control" placeholder="Иван Иванович..." name='name' required>
                           </div>
                           <div class="form-group">
                               <label>Контакты <small>(обязательно)</small></label>
                               <input value="{{ $item->phones }}" type="text" class="form-control" placeholder="Сотовый или домашний..." name='phones' required>
                           </div>
                           <div class="form-group">
                               <label>Средняя цена работ <small>(обязательно)</small></label>
                               <input value="{{ $item->avg_price }}" type="number" class="form-control" placeholder="5000 тг." name='avg_price' required>
                           </div>
                       </div>
                       <div class="col-sm-5 padding-top-25">
                           <div class="form-group">
                               <label>Описание </label>
                               <textarea name='note' class="form-control" style="height: 229px;">{{ $item->note }}</textarea>
                           </div>
                       </div>
                   </div>
                   <div class="clear">
                       <hr>
                       <h4 class="text-center">Настройки</h4>
                       <div class="col-sm-9 col-sm-offset-1">
                           @foreach ($cats as $c)
                               <div class="form-group">
                                    <label>{{ $c->name }} </label> <br/>
                                    @foreach ($c->relVal as $v)
                                        {{ $v->name }} <input type="checkbox" name='cat[{{ $v->type_id }}][{{ $v->id }}]' {{ in_array($v->id, $user_cat) ? 'checked': null }}>
                                    @endforeach
                               </div>
                           @endforeach
                       </div>
                   </div>
                   <div class="clear">
                       <hr>
                       <h4 class="text-center">Ссылки на социальные сети</h4>
                       <div class="col-sm-5 col-sm-offset-1">
                           <div class="form-group">
                               <label>Ссылка на instagram:</label>
                               <input value="{{ $item->social_insta }}" type="text" class="form-control" name='social_insta' placeholder="https://www.instagram.com/user">
                           </div>
                           <div class="form-group">
                               <label>Ссылка на vk:</label>
                               <input value="{{ $item->social_vk }}" type="text" class="form-control" name='social_vk'  placeholder="https://vk.com/user">
                           </div>
                       </div>

                       <div class="col-sm-5">
                           <div class="form-group">
                               <label>Ссылка на facebook:</label>
                               <input value="{{ $item->social_db }}" type="text" class="form-control" name='social_db' placeholder="https://facebook.com/user">
                           </div>
                           <div class="form-group">
                               <label>Логин в skype:</label>
                               <input value="{{ $item->social_skype }}" type="text" class="form-control" name='social_skype'  placeholder="https://Twitter.com/@user">
                           </div>
                       </div>

                   </div>

                   <div class="col-sm-5 col-sm-offset-1">
                       <br>
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


@section('js_block')
    <script type="text/javascript" >
        function previewFile(){
            var preview = document.querySelector('#wizardPicturePreview'); //selects the query named img
            var file    = document.querySelector('#wizard-picture').files[0]; //sames as here
            var reader  = new FileReader();

            reader.onloadend = function () {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file); //reads the data as a URL
            } else {
                preview.src = "/assets/img/avatar.png";
            }
        }

        //previewFile();  //calls the function named previewFile()

    </script>
@endsection
