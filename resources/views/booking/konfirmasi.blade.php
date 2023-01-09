<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/pendaki.jpg" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Pendakian | {{ $title }} </title>
  </head>
 
  <style>


    @media (max-width: 768px) { 
        .main {
            margin-right:210px;
            margin-top:150px;
        }
        .tes {
            display:none;
        }

    }
  </style>

  <body>
  <a  style="margin-left:342px;" class=" tes btn btn-success btn-lg mt-3 mb-3" href="/booking/daftar"><span  data-feather="arrow-left"></span></a>

  <center>

  <div class="main" bgcolor="#f6f6f6" style="color: #333; height: 100%; width: 50%;">
    <table bgcolor="#f6f6f6" cellspacing="0" style="border-collapse: collapse; padding: 40px; width: 100%;" width="100%">
        <tbody>
        @foreach ($bookingdata as $user)
            <tr>
                <td width="5px" style="padding: 0;"></td>
                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td style="padding: 0;">
                                    <a
                                        href="#"
                                        style="color: #348eda;"
                                        target="_blank"
                                    >
                                        <img
                                            src="/img/pendaki.jpg"
                                            alt=""
                                            style="height: 50px; max-width: 100%; width: 157px;"
                                            height="50"
                                            width="157"
                                        />
                                    </a>
                                </td>
                                <td style="color: #999; font-size: 12px; padding: 0; text-align: right;" align="right">
                                    Bawakareng<br />Booking ID :
                                    {{ $user->id }}<br />
                                    {{ $user->created_at }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5px" style="padding: 0;"></td>
            </tr>

            <tr>
                <td width="5px" style="padding: 0;"></td>
                <td bgcolor="#FFFFFF" style="border: 1px solid #000; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                    <table width="100%" style="background: #f9f9f9; border-bottom: 1px solid #eee; border-collapse: collapse; color: #999;">
                        <tbody>
                            <tr>
                                <td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">Pendakian {{ $user->lokasi }} </strong></td>
                                <td align="right" width="50%" style="padding: 20px;">Tunjukkan di pos Registrasi <span class="il"></span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td style="padding: 0;"></td>
                <td width="5px" style="padding: 0;"></td>
            </tr>
            <tr>
                <td width="5px" style="padding: 0;"></td>
                <td style="border: 1px solid #000; border-top: 0; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                    <table cellspacing="0" style="border-collapse: collapse; border-left: 1px solid #000; margin: 0 auto; max-width: 600px;">
                        <tbody>
                            <tr>
                                <td valign="top"  style="padding: 20px;">
                                    <h3
                                        style="
                                            border-bottom: 1px solid #000;
                                            color: #000;
                                            font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;
                                            font-size: 18px;
                                            font-weight: bold;
                                            line-height: 1.2;
                                            margin: 0;
                                            margin-bottom: 15px;
                                            padding-bottom: 5px;
                                        "
                                    >
                                        Ringkasan
                                    </h3>
                                    <table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 5px 0;">Check In</td>
                                                <td align="right" style="padding: 5px 0;">{{ $user->checkin_date }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Check Out</td>
                                                <td align="right" style="padding: 5px 0;">{{ $user->checkout_date }}</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Jumlah Pendaki</td>
                                                <td align="right" style="padding: 5px 0;"> {{ $user->jumlah_pendaki }} Orang</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 5px 0;">Biaya Per-Orang</td>
                                                <td align="right" style="padding: 5px 0; " >Rp5.000</td>
                                            </tr>
                                            <tr>
                                                
                                                <td align="center" style="padding: 0px 380px 10px 0px;  " >Jumlah</td>
                                                <td align="right" style="padding:0px 0px 9px 0px;"> {{ $user->jumlah_pendaki }} x Rp5.000 </td>
                                            </tr>
                                            <tr>
                                                <td class="mb-4" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">Total Bayar</td>
                                                <td align="right" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;"> {{ $user->bayar }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5px" style="padding: 0;"></td>
            </tr>

            <tr style="color: #666; font-size: 12px;">
                <td width="5px" style="padding: 10px 0;"></td>
                <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
                    <table width="100%" cellspacing="0" style="border-collapse: collapse;">
                        <tbody>
                            <tr>
                                <td width="40%" valign="top" style="padding: 10px 0;">
                                    <h4 style="margin: 0;">Terima Kasih</h4>
                                </td>
                                <td width="10%" style="padding: 10px 0;">&nbsp;</td>
                                <td width="40%" valign="top" style="padding: 10px 0;">
                                    <h4 style="margin: 0;"><span class="il">Pendakian</span> Bawakaraeng</h4>
                                    <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
                                        <a href="/about">Pattapang, Kec. Tinggimoncong, Kabupaten Gowa, Sulawesi Selatan 92171</a>
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td width="5px" style="padding: 10px 0;"></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="/js/dashboard.js"></script>
      <script>
        feather.replace();
      </script>
          </center>
  </body>
</html>
