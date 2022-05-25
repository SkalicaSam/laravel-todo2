<html>
    <head>
    </head>
    <body>
        <h1>Scanpage welcome<h1>
            <?php
           

use Illuminate\Http\Request;
use App\Models\ListItem;
                echo "blablaf";
// from stream
                // $QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
                // $qrcode_text = $QRCodeReader->decode(base64_encode("image_stream"));
                // echo $qrcode_text;


//from file
                //require __DIR__ . "/vendor/autoload.php";
                //require __DIR__ . "/qr.png";

                //C:\xampp\htdocs\laravel_projects_demos\todo2\public
$qrcode = new QrReader('C:\xampp\htdocs\laravel_projects_demos\todo2\public/qr.png');
$text = $qrcode->text(); //return decoded text from QR Code
                 
                
                ?>
            

            <!-- <form method="post" action="{{ route('saveItem')}}" accept-charset="UTF-8">
                    {{csrf_field() }}
                    <label for="listItem">New Todo Item</label></br>
                    <input type="text" name="listItem"></br> 

                    <button type="submit">Save Item</button>
                </form> -->
    </body>

</html>