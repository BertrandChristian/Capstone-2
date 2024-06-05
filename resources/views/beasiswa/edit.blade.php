@extends('layouts.master')

@section('web-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Data Periode Beasiswa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Periode Beasiswa</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        {{ implode('', $errors->all(':message')) }}
                                    </div>
                                @endif

                                <form method="post" action="{{ route('periodebs-update', ['id'=>$bs->id_beasiswa]) }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="beasiswa-id">ID</label>
                                        <input type="text" class="form-control" id="beasiswa-id"
                                               placeholder="Contoh: Text" name="id_beasiswa" required autofocus
                                               maxlength="100" value="{{ $bs->id_beasiswa }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="beasiswa-awal">Periode Awal</label>
                                        <input type="date" class="form-control" id="beasiswa-awal"
                                               required name="periode_awal_beasiswa" value="{{ $bs->periode_awal_beasiswa}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="beasiswa-akhir">Periode Akhir</label>
                                        <input type="date" class="form-control" id="beasiswa-akhir"
                                               required name="periode_akhir_beasiswa" value="{{ $bs->periode_akhir_beasiswa}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection

@section('ExtraCSS')

@endsection

@section('ExtraJS')

@endsection
