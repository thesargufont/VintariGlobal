<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <head>
        <style>
            #watermark {
                position: fixed;
                bottom:   10cm;
                left:     5.5cm;
                width:    8cm;
                height:   8cm;
                z-index:  -1000;
                opacity: 0.5;
                filter: alpha(opacity=50); /* For IE8 and earlier */
            }
        </style>
        @yield('content_headscript')
    </head>
    <body>
    <div id="watermark">
        @if(config('app.env', 'development')!="production")
            <img src="data:image/png;base64,{{base64_encode(file_get_contents(public_path("/img/testmark.png")))}}" height="100%" width="100%" />
        @endif
    </div>
    <main>
        @yield('content')
    </main>
    @yield('content_tailscript')
    </body>
</html>
