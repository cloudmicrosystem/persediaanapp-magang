<html>
    <head>
        <title>
            Belajar Blade
        </title>
    </head>
    <body>
        <p>Halo {{ $nama }}</p>
        <p>Contoh Foreach</p>
        <ul>
            @foreach($daftar_nama as $key=>$value)
                <li>
                  {{ $key+1 }}. {{ $value }}
                </li>
            @endforeach
        </ul>

        <p>Contoh For</p>
        <ul>
            @for($i=0;$i<3;$i++)
                <li>{{ $i+1 }}. {{ $daftar_nama[$i] }}</li>
            @endfor
        </ul>

        <p>Contoh For & IF</p>
        <ul>
            @for($i=0;$i<3;$i++)
                @if (($i+1)%2==1)
                  <li>{{ $i+1 }}. {{ $daftar_nama[$i] }}</li>
                 @endif
            @endfor
        </ul>
    </body>
</html>
