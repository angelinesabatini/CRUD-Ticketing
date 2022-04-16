<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="{{ asset('css/formcss.css') }}" rel="stylesheet">

<div class="button">
    <a href="/createcust" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Customer</a>
    <a href="/createorder" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create Order</a>
</div>

<div class="formcss">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Category</th>
      <th scope="col">Qty</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
   
  @if(isset($provinsi))
    @foreach ($provinsi as $prov)
    <tr>
      <td class="text-center">{{$prov->id}}</td>
      <td class="text-center">{{$prov->nama}}</td>
       <!--Relation one to many-->
      <td class="text-center"> @foreach ($prov->kabupaten as $test) {{$test->nama}} @endforeach</td>
     
      <td>
      <a href="/viewprovinsi/{{$prov->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Lihat</a>
      <a href="/editprovinsi/{{$prov->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>  
      
        <form action="deleteprovinsi/{{$prov->id}}" method="POST">
          @csrf
          @method('DELETE') 
            <button href='{{$prov->id}}' type='submit' class='btn-delete btn btn-danger btn-sm my-2 my-sm-2 p-2'>Delete</button>
        </form>
      </td>
    </tr>
  </tbody>
    @endforeach
  @endif
    
   
</table>
</div>

<div class="formcss2">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kabupaten</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($kabupaten as $kab)
    <tr>
      <td class="text-center">{{$kab->id}}</td>
      <td class="text-center">{{$kab->nama}}</td>
      <td class="text-center">{{$kab->provinsi->nama}}</td>
      <td>

      <a href="/viewkabupaten/{{$kab->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Lihat</a>
      <a href="/editkabupaten/{{$kab->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>  
      
        <form action="delete/{{$kab->id}}" method="POST">
          @csrf
          @method('DELETE') 
            <button href='{{$kab->id}}' type='submit' class='btn-delete btn btn-danger btn-sm my-2 my-sm-2 p-2'>Delete</button>
        </form>
      </td>
    </tr>
  </tbody>
    @endforeach
</table>
</div>

