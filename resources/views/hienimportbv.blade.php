<link rel="stylesheet" href="{{ asset('css/bootstrap4.min.css') }}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/importtonvimh.css') }}" >
@extends('block.index')
@section('title')
<title>Import bệnh viện</title>
@endsection
@section('title_page')
IMPORT BỆNH VIỆN



@endsection
@section('content')
<hr  width="100%" align ="center" style="background-color: black; height: 3px;"  />
<div class='col' id='tablebenhvien'>
  <div class='card'>
      <div class='card-header' style='text-align: right'>
      </div>
      <div class='card-header' style='text-align: center'>
          <h4>Danh sách người hiến máu bệnh viện vừa nhập</h4>
      </div>
      @csrf

 <div class='card-body'>
          <table class='table' id='accountTable'>
              <thead class='thead-dark'>
      <tr>
        <th scope="col"> STT</th>
        <th scope="col"> Họ tên</th>
        <th scope="col"> Ngày sinh </th>
        <th scope="col"> Nơi làm việc </th>
        <th scope="col"> Số điện thoại </th>
        <th scope="col"> dia chi </th>
        <th scope="col"> so lan hien</th>
        <th scope="col"> nhom mau </th>
        <th scope="col"> nhomRh </th>

      </tr>
    </thead>
    <tbody>
        <?php $i=1;  ?>
        @foreach ($nguoihienmau_benhviens as $key)
            <tr>
                <input type="hidden" name="id" value="{{$nguoihienmau_benhviens[$key]->id}}">
                <th scope="row">{{ $i++ }}</th>
                <td>{{  $nguoihienmau_benhviens[$key]->hoten}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->ngaysinh}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->noilamviec}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->sodienthoai}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->solanhien}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->diachi}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->solanhien}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->nhommau}}</td>
                <td>{{  $nguoihienmau_benhviens[$key]->nhomRh}}</td>
              </tr>
        @endforeach
    </tbody>
  </table>
</div>
@endsection

