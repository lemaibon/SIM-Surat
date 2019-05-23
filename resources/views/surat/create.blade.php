@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Surat</div>
                    <div class="panel-body">
                        <a href="{{ url('/surat') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        {!! Form::open(['url' => '/surat', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('surat.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
            @include('admin.sidebar')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        jQuery(document).ready(function () {
            if ($('.tipe').val()=='keluar') {
                $('.tglTerima').hide();
            } else {
                $('.tglTerima').show();
            }
            $('.tipe').on('change', function () {
                if ($(this).val()=='keluar') {
                    $('.tglTerima').hide();
                } else {
                    $('.tglTerima').show();
                }
            })
        });
    </script>
@endsection