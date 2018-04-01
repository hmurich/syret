@extends('front.layout')

@section('title', $title)

@section('content')

<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
   <div class="container">
       <div class="row">
           <div class="col-sm-10 col-sm-offset-1 profiel-container">
               <div class="profiel-header">
                   <h3>
                       {{ $title }}<br><br>
                       <button type="button" class="btn btn-success " data-toggle="modal" data-target="#myModal">Добавить Вашу работу</button>
                   </h3>
               </div>
               <div class="clear">
                   <hr>
                   <div class="col-12">
                       @forelse ($works as $w)
                           <div class="col-md-6">
                                <div class="col-md-6">
                                    <a href="/{{ $w->img_path }}"><img src="/{{ $w->img_path }}"></a>
                                </div>
                                <div class="col-md-6">

                                    <strong>Описание</strong>:
                                    <p >{{ $w->note }}</p>
                                </div>
                            </div>
                       @empty
                          <div class="col-md-6">
                              <p>Нет никаких работ(((((</p>
                          </div>
                       @endforelse
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>


<!-- Modal -->
<form action="{{ action('Front\Painter\WorkController@postIndex') }}" method="POST" enctype='multipart/form-data' class="profiel-container">
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Добавление новой работы</h4>
                    </div>
                <div class="modal-body">
                    <div class="col-sm-5 adding-top-25">
                        <div class="picture-container">
                            <div class="picture">
                                <img src="/front/assets/img/avatar.png"
                                     class="picture-src" id="wizardPicturePreview" style=" height: 100%;"/>
                                <input type="file" id="wizard-picture" name='img_path' onchange="previewFile()">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 padding-top-25">
                        <div class="form-group">
                            <textarea name='note' class="form-control" style="height: 229px;" placeholder="Описание работы"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default" >Сохранить</button>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

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
                preview.src = "/front/assets/img/avatar.png";
            }
        }

        //previewFile();  //calls the function named previewFile()

    </script>
@endsection
