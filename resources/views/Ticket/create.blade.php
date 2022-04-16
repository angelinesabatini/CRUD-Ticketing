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
            <h4 class="card-title">Create Ticket</h4>
          </div>
          <div class="card-body">
            <form action="{{Route('ticket.store')}}" method="POST"  enctype="multipart/form-data" id="step-form-horizontal" class="step-form-horizontal">
              @csrf
              <div>
                <section>
                  <<div class="mb-3">
                        <label for="Category" >Category</label>
                        <select name="category" id=""class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="DAY 1 - 23 APRIL 2022">DAY 1 - 23 APRIL 2022</option>
                            <option value="DAY 2 - 24 APRIL 2022">DAY 2 - 24 APRIL 2022</option>
                            <option value="2 DAYS">2 DAYS</option>
                        </select>
                      </div>
                    
                    <div class="row">
                      <div class="col-lg-12 mb-2">
                        <div class="form-group">
                          <label class="text-label">Harga</label>
                          <input value="{{old('harga')}}" type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga Ticket" aria-describedby="inputGroupPrepend2" required>
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