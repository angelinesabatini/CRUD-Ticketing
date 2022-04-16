<?php
  $title="Admin";
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
        
        <li class="breadcrumb-item"><a href="javascript:void(0)">Create Buyer</a></li>
      </ol>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <div class="alert alert-success mt-2">
              {{ $error }}
            </div>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- row -->
    <div class="row">
      <div class="col-xl-12 col-xxl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Order Ticket</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('buyer.store')}}" method="POST"  enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal">
              @csrf
              <div>
                <section>
                  <div class="row">
                    <div class="col-lg-12 mb-2">
                      <div class="form-group">
                        <label class="text-label">Nama</label>
                        <input value="{{old('Nama')}}" type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Buyer" aria-describedby="inputGroupPrepend2" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">Tanggal Lahir</label>
                          <input value="{{old('Tanggal_Lahir')}}" type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" aria-describedby="inputGroupPrepend2" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">E-Mail</label>
                          <input value="{{old('email')}}" type="text" class="form-control" id="email" name="email" placeholder="Masukkan E-Mail" aria-describedby="inputGroupPrepend2" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">No Telepon</label>
                          <input value="{{old('Telepon')}}" type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan No Telepon" aria-describedby="inputGroupPrepend2" required>
                        </div>
                      </div>
                    </div>

                    <div class="">
                      <label><strong>Select Ticket :</strong></label><br/>
                      <select class="selectpicker" multiple data-live-search="true" name="cat[]">
                        @foreach ($ticket as $tickets)
                                <option value ="{{$tickets->id}}">{{$tickets->category}} </option>   
                                @endforeach
                      </select>
                  </div>

                    <div class="row">
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">QTY</label>
                          <input value="{{old('Qty')}}" type="number" class="form-control" id="qty" name="qty" placeholder="Masukkan Jumlah Ticket" aria-describedby="inputGroupPrepend2" required>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-12 mb-3">
                      <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>  
                    </div>
                  </div>
                </section>
              </div>
            </form>
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