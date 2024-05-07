<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        body {
        background: linear-gradient(to bottom, #51d60f 10%, #41e0b6); 
        display: flex;
        align-items: center;
        height: 100vh;
        justify-content: center;

             }

        .kotak {
            background: rgba(255, 255, 255, 0.951);
            border-radius: 1rem;
            border: 2px solid #010955;
            padding: 30px;
        }

        h1 {
            color: rgb(27, 27, 92);
            text-align: center;
            height: 30px;
            }

        .underline {
            background: -webkit-linear-gradient(right, #5ae2f4, #11d392);
            height: 5px;
            margin: -1.1rem auto 0 auto;
            width: 160px;
        }

        h2 {
            color: rgb(27, 27, 92);
            text-align: left;
            padding-top: 25px;
            margin: -8px;
        }

        p {
            text-align: left;
            
            font-style: italic;
            
        }

        h3 {
            text-align: left;
            color: rgb(27, 27, 92);
        }

        ul,ol {
            text-align: left;
        }

        li
         {
            text-align:left;

        }
    </style>
    <title>Media Online-Adji</title>
</head>
<body>
    <div class="kotak">
    <div id="title">
    <h1>Media Online</h1>
    <div class="underline">
    </div>
    <h2>Sosial Media Developer</h2>
    
    <p>"Belajar dan berbagi agar hidup menjadi lebih baik"</p>

    <h3>Benefit Join di Media Online</h3>

    <ul>
        <li>Mendapatkan motivasi dari sesama para Developer</li>
        <li>Sharing knowlenge</li>
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>

    <h3>Cara Bergabung ke Media Online</h3>
   
    <ol>
        <li>Mengunjungi Web ini</li>
        <li>Mendaftarkan di <a href="{{url ('form') }}">Form Sin Up</a></li>
        <li>Selesai</li>
    </ol>
</div>
</body>
</html>