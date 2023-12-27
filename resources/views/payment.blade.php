<html>
    <head>
        <title>
            Donasi Laravel
        </title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h4>Donasi Sosial Laravel</h4>
                    <form method="post" action="{{ route('process') }}">
                        @csrf
                        @if (Auth::check())
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />

                            
                        
                        <div class="form-group">
                          <label for="nama">Nama :</label>
                          <input type="text" required name="nama" class="form-control" id="nama" value="{{Auth::user()->name}}">
                        </div>

                        <div class="form-group">
                          <label for="email">Email :</label>
                          <input type="email" required name="email" class="form-control" id="email" value="{{ Auth::user()->email }}" >
                        </div>
                        
                        <div class="form-group">
                          <label for="nohp">No Hp :</label>
                          <input type="text" required name="nohp" class="form-control" id="nohp" value="{{ Auth::user()->phone }}" >
                        </div>
                        
                        <div class="form-group">
                          <label for="nominal">Nominal :</label>
                          <input type="number" required name="nominal" class="form-control" id="nominal">
                        </div>
                        @endif
                        <b>metode pembayaram</b>
                      @foreach($metode as $m)
                      <div class="form-check">
                        <label class="form-check-label">
                          <input type="radio" class="form-check-input" value ="{{$m->code}}" name="metode">{{$m->name}}
                          </label>
                      </div>
                      @endforeach

                        


                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>        
                </div>
            </div>
        </div>
    </body>
</html>