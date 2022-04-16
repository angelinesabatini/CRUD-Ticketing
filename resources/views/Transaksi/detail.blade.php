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
                    <li class="breadcrumb-item active"><a href="#">Transaksi</a></li>
                </ol>
            
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List Ticketing</h4>
                        
                            
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-responsive-sm">
                                <thead>
                                    <tr>
                                    <th> No </th>
                                        <th>Nama Buyer</th>
                                        <th>Tanggal Pembelian</th>
                                        <th>Total Ticket</th>
                                        <th>Total Pembayaran</th>
                                        {{-- <th>List Peserta</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datas)
                                        <tr>
                                            <td>{{ $datas->id }}</td>
                                            <td>{{ $datas->nama }}</td>
                                            <td>{{ $datas->tgl_pembelian }}</td>
                                            <td>{{ $datas->qty }}</td>
                                            <td>{{ $datas->harga }}</td>
                                            
                                                @csrf
                                                    {{-- <input type='hidden' value="jpg" name="qr_type" />
                                                    <input type='hidden' value="{{ 'jpg' }}" name="section" /> --}}
                                                    
                                                </form>
                                            </td>
                                            <td>
                                            <a href="{{ Route('ticket.show', $datas->id) }}"
                                            class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                            class="fa fa-search-plus"></i></a>
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

    <!--**********************************
        Content body end
    ***********************************-->
@endsection
