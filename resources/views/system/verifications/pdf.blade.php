<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Certification</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">
    <style type="text/css">
        @page {
            margin: 0;
            /*background: url('https://tuv.com.sa/SystemDesign/assets/pdf/tuv-cer-logos.jpg') no-repeat 100% 100%;*/
            background: url('https://tuv.com.sa/SystemDesign/assets/pdf/tuv-cer.jpg') no-repeat 100% 100%;
            padding: 0; /* Padding is not supported in @page */

        }
        body {
            font-family: "Montserrat", sans-serif;
            font-weight: 200;
        }
        .CERTIFICATE-title {
            position: absolute;
            top: 150px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 30px;
            font-weight: 300;
            z-index: 200;
            border: none;
        }

        .CERTIFICATE-title2 {
            position: absolute;
            top: 185px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }

        .CERTIFICATE-title3 {
            position: absolute;
            top: 235px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }

        .company-name {
            position: absolute;
            top: 255px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }

        .certified {
            position: absolute;
            top: 280px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }
        .iso-num {
            position: absolute;
            top: 350px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }

        .desc-title {
            position: absolute;
            top: 450px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }

        .desc-body {
            position: absolute;
            top: 490px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            /*font-size: 24px;*/
            /*font-weight: bold;*/
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            margin: auto;
            line-height: 20px;
            z-index: 200;
        }
        .Certificate-info {
            position: absolute;
            top: 690px;
            left: 120px;;
            right: auto;
            padding: 0;
            text-align: left;
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            line-height: 20px;
            z-index: 200;
        }
        .sign {
            position: absolute;
            bottom: 180px;
            left: 150px;;
            right: auto;
            padding: 0;
            text-align: left;
            color: #222 !important;
            font-family: "Montserrat", sans-serif;
            line-height: 20px;
            z-index: 200;
        }
        .qrcode {
            position: absolute;
            bottom: 130px;
            right: 50px;;
            left: auto;
            z-index: 200;
        }
        .qrcode2 {
            position: absolute;
            bottom: 130px;
            right:300px;;
            left: auto;
            z-index: 200;
        }
        .table-info {
            text-align: left;
        }
        .table-info th {
            text-align: left;
        }
        .table-info td {
            padding-left: 50px;
        }

    </style>

</head>
<body dir="ltr" style="padding: 0; margin: 0; background: #000; position: relative;">
<div class="CERTIFICATE-title" style="font-size: 40px; font-weight: 300">CERTIFICATE</div>
<div class="CERTIFICATE-title2" style="font-size: 15px">The Management System of</div>

{{-- Company Name --}}
<div class="CERTIFICATE-title3" style="font-size: 20px">{{ $verification->organization_name }}</div>

{{-- Address --}}
<div class="company-name" style="font-size: 15px">{{ $verification->organization_location }}</div>

<div class="certified" style="font-size: 15px">Has been assessed and certified as meeting the requirements of</div>

{{-- Certification Type --}}
<div class="iso-num" style="font-size: 30px;font-weight: 400">ISO{{ $verification->certification_number }}</div>

<div class="desc-title" style="font-size: 15px">The management system is applicable to:</div>

{{-- Scope (Multi-line support) --}}
<div class="desc-body" style="font-size: 15px">
    {!! nl2br(e($verification->description)) !!}
</div>

<div class="Certificate-info" style="font-size: 15px">
    <table class="table-info">
        @php
            use Endroid\QrCode\Builder\Builder;
            use Endroid\QrCode\Writer\PngWriter;

            try {
                $url = url('verify/' . $verification->certification_number);

                $result = Builder::create()
                    ->writer(new PngWriter())
                    ->data($url)
                    ->size(150)
                    ->margin(5)
                    ->build();

                $qrImage = base64_encode($result->getString());
            } catch (\Exception $e) {
                $qrImage = null;
            }
        @endphp




        <tr>
            <th>Certificate Number:</th>
            <td>{{ $verification->certification_number }}</td>
        </tr>
        <tr>
            <th>Initial Certificate Date:</th>
            <td>{{ \Carbon\Carbon::parse($verification->initial_date)->format('F d, Y') }}</td>
        </tr>
        <tr>
            <th>Date of Certification Decision:</th>
            <td>{{ \Carbon\Carbon::parse($verification->initial_date)->format('F d, Y') }}</td>
        </tr>
        <tr>
            <th>Issued Date:</th>
            <td>{{ \Carbon\Carbon::parse($verification->issue_date)->format('F d, Y') }}</td>
        </tr>
        <tr>
            <th>Valid Unit:</th>
            <td>{{ \Carbon\Carbon::parse($verification->end_date)->format('F d, Y') }}</td>
        </tr>
    </table>
</div>
<div class="sign"><img src="https://tuv.com.sa/SystemDesign/assets/pdf/sign.jpg" style="max-width: 150px"/></div>
@if($qrImage)
    <div class="qrcode">
        <img src="data:image/png;base64,{{ $qrImage }}" style="max-width: 120px" alt="QR Code" />
    </div>
@else
    <div class="qrcode">
        <p style="color: red;">QR generation failed.</p>
    </div>
@endif
{{-- <div class="qrcode"><img src="https://tuv.com.sa/SystemDesign/assets/pdf/qr.png" style="max-width: 120px"/></div> --}}
{{--<div class="qrcode2"><img src="https://tuv.com.sa/SystemDesign/assets/pdf/qr.png" style="max-width: 120px"/></div>--}}

</body>


</html>
