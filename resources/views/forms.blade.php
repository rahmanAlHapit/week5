<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-grub">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" @if(isset($nama)) value="{{ $nama }}" @endif>    
                    </div>
                    <div class="form-grub">
                        <label for="email">Email</label>
                        <input type="emai" name="email" class="form-control" @if(isset($email)) value="{{ $email }}" @endif>    
                    </div>
                    <div class="form-grup">
                        <label for="gender"> Jenis Kelamin</label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="f" @if(isset($radio) && $gender == "f") checked @endif>Prempuan
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="m" @if(isset($radio) && $gender == "m") checked @endif>Laki-Laki
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="other" @if(isset($radio) && $gender == "other") checked @endif>other
                            </label>
                        </div>
                    </div>
                    <br>
                    <div class="form-grub">
                        <label>Senjata Pilihan</label><br>
                        <label>Bisa pilih lebih dari satu</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="weapon[]" value="Murasama" @if(isset($weapon) && in_array('Murasama', $weapon)) checked @endif> Murasama
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="weapon[]" value="Masamune" @if(isset($weapon) && in_array('Masamune', $waepon)) checked @endif> Masamune
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="weapon[]" value="Sange And Yasha" @if(isset($weapon) && in_array('Murasama', $waepon)) checked @endif> Sange &amp; Yasha
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="weapon[]" value="ChunChunMaru" @if(isset($weapon) && in_array('Murasama', $waepon)) checked @endif> ChunChunMaru
                            </label>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
                <br>
                <br>
                @if(isset($nama))
                    halo, {{ $nama }}
                @endif
                <br>
                @if(isset($email))
                    Email kamu {{ $email }}
                @endif
                <br>
                @if(isset($gender))
                    jenis kelamin kamu, 
                    @if($gender == "m") 
                        Laki-laki
                    @elseif($gender == "f")
                        Perempuan
                    @else
                        Alien
                    @endif  
                @endif
                <br>
                @if(isset($weapon))
                    Senjata Pilihan kamu
                    @foreach($weapon as $wap)
                        <br>
                        -->{{ ucwords($wap) }}
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/bootstrap.js') }}" type="text/javascript"></script>
</body>
</html>