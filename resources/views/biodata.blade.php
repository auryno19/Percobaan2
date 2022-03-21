@extends('layouts.main')

@section('isi')
<div class='row'>
    <div class='col'>
        <div class='bio'>
            <h1 class="fw-bold">ABOUT ME</h1>
           
                <div class='box'>
                <table class="table ">
                   
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</th>
                            <td>:</td>
                            <td>{{ $nama }}</td>
                        </tr>
                        <tr>
                            <td>TTL</th>
                            <td>:</td>
                            <td>Malang, 19 Mei 2000</td>
                        </tr>
                        <tr>
                            <td>Usia</th>
                            <td>:</td>
                            <td>{{ $umur }} Tahun</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</th>
                            <td>:</td>
                            <td>{{ $jk["jenis"] }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</th>
                            <td>:</td>
                            <td>{{ $alamat }}</td>
                        </tr>
                        <tr>
                            <td>Agama</th>
                            <td>:</td>
                            <td>{{ $agama["agama"] }}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</th>
                            <td>:</td>
                            <td>{{ $pekerjaan }}</td>
                        </tr>
                        
                    </tbody>
                </table>
                {{-- <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Odio earum explicabo obcaecati unde incidunt doloremque qui ex 
                vitae nobis quaerat adipisci aperiam quidem nostrum quae, r
                epudiandae, laborum dignissimos, culpa quos!
                <br><br>
                <b>TTL</b> : Malang 19 Mei 2000 <br>
                <b>Kelamin</b> : Laki-laki <br>
                <b>Daerah</b> : Malang <br>
                <b>Jurusan</b> : Teknologi Informasi <br>
                <b>Program Studi</b> : D4 Teknik Informasi <br>
                  
                </p> --}}
         
                </div>

            <div class='box2'>
                <a href="https://www.facebook.com/aga.d.rino">
                <img src="fb.png" class="sosmed"></a>
                <a href="https://www.instagram.com/auryno.nagata/">
                <img src="ig.png" class="sosmed"></a>
                <a href="mailto:aurynoaga19@gmail.com">
                <img src="gmail.png" class="sosmed"></a>
                
            </div>
        </div>
    </div>
    <div class='col'>
        <div class="photo">
            <img src="myphoto.jpeg" width="350px" height="auto";>
                <div class="photobox">
                <p>My Photo</p>
                </div>
        </div>    
    </div>
</div>
@endsection