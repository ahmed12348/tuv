<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certification PDF</title>
    <style>
        body {
            font-family: 'dejavu sans', sans-serif;
            padding: 40px;
            color: #333;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header h1 {
            font-size: 24px;
            margin: 0;
        }
        .certificate-box {
            border: 1px solid #888;
            padding: 30px;
            border-radius: 8px;
            background: #f9f9f9;
        }
        .certificate-box p {
            margin: 10px 0;
            font-size: 14px;
        }
        .label {
            font-weight: bold;
            width: 200px;
            display: inline-block;
        }
        .barcode {
            margin-top: 40px;
            text-align: center;
        }
        .barcode img {
            margin-top: 10px;
        }
        .barcode-link {
            font-size: 12px;
            color: #555;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Certification Details</h1>
        <h2>{{ $verification->certification_name }}</h2>
    </div>

    <div class="certificate-box">
        <p><span class="label">Certification Name:</span> {{ $verification->certification_name }}</p>
        <p><span class="label">Certification Number:</span> {{ $verification->certification_number }}</p>
        <p><span class="label">Organization Name:</span> {{ $verification->organization_name }}</p>
        <p><span class="label">Standard:</span> {{ $verification->stander }}</p>
        <p><span class="label">Initial Date:</span> {{ \Carbon\Carbon::parse($verification->initial_date)->format('F d, Y') }}</p>
        <p><span class="label">Issue Date:</span> {{ \Carbon\Carbon::parse($verification->issue_date)->format('F d, Y') }}</p>
        <p><span class="label">End Date:</span> {{ \Carbon\Carbon::parse($verification->end_date)->format('F d, Y') }}</p>
    </div>

<div class="barcode">
    <p><strong>Scan to Verify:</strong></p>
    @php
        try {
            $url = url('verify/' . $verification->certification_number);
            $barcode = DNS1D::getBarcodePNG($url, 'C128');

        } catch (\Exception $e) {
            $barcode = null;
        }
    @endphp

    @if($barcode)
        <img src="data:image/png;base64,{{ $barcode }}" alt="Barcode" />
        

    @else
        <p style="color: red;">Barcode generation failed.</p>
    @endif

    {{-- <p class="barcode-link">
        {{-- {{ $verification->certification_number }}<br> --}}
        {{-- {{ url('verify/' . $verification->certification_number) }} --}}
    {{-- </p>  --}}
</div>


</body>
</html>
