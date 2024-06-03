<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recruitment Email</title>
</head>
<body>
    <div class="container">
        <div style="width: 100%; background-color: yellow; text-align: center; margin: auto; padding: 20px">
            <h1>UNITED TRACTORS SCHOOL</h1>
        </div>
        <p>Ada yang ingin merekrut siswa berikut:</p>
        <ol>
        @forelse ($students as $i => $item)
            <li>
                <strong>{{ $item['name'] }}</strong> - {{ $item['role'] }} - {{ $item['branch']['city'] }}
            </li>
        @empty
            <li>Belum ada siswa yang terdaftar.</li>
        @endforelse
        </ol>
        <p>Silakan hubungi kami jika Anda tertarik dengan siswa di atas.</p>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Perusahaan Anda. Semua hak dilindungi undang-undang.</p>
        </div>
    </div>
</body>
</html>
