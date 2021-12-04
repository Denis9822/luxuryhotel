@extends('layouts.admin')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid mt-3">

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                       Переводы
                    </div>
                    <div class="wrap_butn p-3">

                        <button type="button" class="btn btn-secondary admin_edit" disabled>Добавить переводы к внедрению</button>
                        <button type="button" class="btn btn-danger admin_del mr-5" disabled>Удалить</button>
                        <button type="button" class="btn btn-primary admin_add"><a href="{{route('admin.translation.add')}}" style="color: white">Добавить внедрение</a></button>
                    </div>

                    <div class="card-body dds">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Название для внедрения (англ)</th>

                                </tr>
                                </thead>
                                <tfoot>

                                <tr>
                                    <th></th>
                                    <th>Название для внедрения (англ)</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                @foreach($values as $res)
                                <tr>
                                    <td><input type="radio" name="depid" value="{{$res->id}}"></td>
                                    <td>{{$res->name}}</td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script>

        $('input[type=radio]').on('change',function (){

            var id = $(this).val();

            $('.admin_edit').removeAttr('disabled');
            $('.admin_del').removeAttr('disabled');

            $('.admin_edit').click(function (){
                window.location.href = '/admin/translation/'+id+'/edit';
            })
            $('.admin_del').click(function (){
                window.location.href = '/admin/translation/'+id+'/remove';
            })

        })


    </script>
@endsection


