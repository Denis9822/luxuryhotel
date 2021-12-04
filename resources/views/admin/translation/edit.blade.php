@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">
                    @csrf
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlInput2"><h5>Название</h5></label>--}}
{{--                        <input type="text" name="name" value="{{$value->name}}" placeholder="" class="form-control" id="exampleFormControlInput2">--}}
{{--                    </div>--}}
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    @foreach($langs as $lang)
                                    <button type="button" class="btn btn-link " data-toggle="collapse" data-target="#collapse{{$lang->flag}}" aria-expanded="true" aria-controls="collapse{{$lang->flag}}">
                                        {{$lang->name}}
                                    </button>
                                    @endforeach
                                </h5>
                            </div>
                            @foreach($langs as $lang)
                            <div id="collapse{{$lang->flag}}" class="{{($loop->index == 0) ? 'show' : ''}} collapse active" aria-labelledby="headingOne" data-parent="#accordion">
                                <form action="" id="{{$lang->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                 <div class="form-group p-4">
                                      <label for="exampleFormControlInput2"><h5>Текст {{$lang->name}}</h5></label>
                                     <input type="hidden" name="text_id" value="{{$value->textByLang($lang->shortcut)->id ?? ''}}">
                                     <input type="hidden" name="lang" value="{{$lang->shortcut}}">
                                       <input type="text" name="text" value="{{$value->textByLang($lang->shortcut)->text ?? ''}}" placeholder="" class="form-control" id="exampleFormControlInput2">
                                 </div>
                                <input type="submit" class="btn btn-primary m-4" value="Сохранить">
                                </form>
                            </div>

                            @endforeach

                        </div>

                    </div>

                </form>
            </div>
        </main>

    </div>

    @if (session('edit'))
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Редактирование</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{session('edit')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>

                </div>
            </div>
        </div>
    </div>

    <script>
        $('#myModal').modal('show');
    </script>
    @endif
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        $("#exampleFormControlFile11").change(function() {
            readURL(this);
        });
    </script>

@endsection


