<?php
$title = 'Admin';
?>

@extends('layout.template')
@section('content')
    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="#">Buyers</a></li>
                </ol>
            </div>
            @if (session()->has('success'))
                <div class="alert alert-success mt-2">
                    {{ session()->get('success') }}
                </div>
            @endif
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Table Buyer</h4>
                        
                            <a href="{{ Route('buyer.create') }}">
                                <div class="btn btn-primary">Add Buyers</div>
                            </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>E-Mail</th>
                                        <th>Telepon</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr>
                                            <td>{{ $datas->id}}</td>
                                            <td>{{ $datas->nama }}</td>
                                            <td>{{ $datas->tgl_lahir}}</td>
                                            <td>{{ $datas->email}}</td>
                                            <td>{{ $datas->no_hp }}</td>
                                                @csrf
                                                    {{-- <input type='hidden' value="jpg" name="qr_type" />
                                                    <input type='hidden' value="{{ 'jpg' }}" name="section" /> --}}
                                                    
                                                </form>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ Route('buyer.edit', $datas->id) }}"
                                                        class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <div class="sweetalert">
                                                        <form action="{{ Route('buyer.destroy', $datas->id)}}"
                                                            method="DELETE">
                                                            @csrf
                                                            <button type="submit"
                                                                onclick="return confirm('Apakah anda yakin?')"
                                                                class="btn btn-danger shadow btn-xs sharp sweet-success-cancel"><i
                                                                    class="fa fa-trash"></i></button>          
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
