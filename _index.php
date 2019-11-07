<?php
error_reporting(0);
$lamafile = 300;
$waktu = time();
if ($handle = opendir('datablock')) {
while(false !== ($file = readdir($handle)))
{
$akses = fileatime('datablock/'.$file);
if( $akses !== false)
if( ($waktu- $akses)>=$lamafile )
unlink('datablock/'.$file);
}
closedir($handle);
}
?>
<?php
error_reporting(0);
$lamafilee = 3600;
$waktuu = time();
if ($handlee = opendir('datanomer')) {
while(false !== ($filee = readdir($handlee)))
{
$aksess = fileatime('datanomer/'.$filee);
if( $aksess !== false)
if( ($waktuu- $aksess)>=$lamafilee )
unlink('datanomer/'.$filee);
}
closedir($handle);
}
?>
<?php
date_default_timezone_set("Asia/Jakarta");
$timestamps = date("Y-m-d H:i:s");
error_reporting(0);

include 'header.php';
include 'config.php';


$db = mysqli_connect("$host","$username","$password","$dbname");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


function curl($url, $fields = null, $headers = null)
{
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        if ($fields !== null) {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        }
        if ($headers !== null) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        $result   = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        return array(
            $result,
            $httpcode
        );
	}
{
    $headers = array();
    $header[] = 'Content-Type: application/json';
    $header[] = 'X-AppVersion: 3.40.0';
    $header[] = "X-Uniqueid: ac94e5d0e7f3f".rand(111,999);
    $header[] = 'X-Location: -6.405821,106.064193';
    $header[] ='Authorization: Bearer '.$secret;
    $header[] = 'pin:'.$pin.'';
    
    $idlimit = "1";
$sapa=array('Met dini 🌙 hari . ','Met jelang pagi . ','Selamat 🌷 Pagi 🌷 ','Met 🌷 Pagi 🌱 ','｡◕‿◕｡ ','☀~ ','Breakfast time 🍔☕🍸🍺 . ','Met Tifitas 💻 ','Have a nice day ☀ . ','Good ☀ Day . ','Time for 🍔☕🍸🍺 lunch . ','Met makan 🍔☕🍸🍺 siang ☀ .','Good siang ☀ . ','Met jelang sore . ','Good afternoon . ','☀~ ','Salam kompak 👈jempoler👉 ','Good evening . ','Time for 🍔☕🍸🍺 dinner . ','Met 📺 Online ~ . ','Met 💤 rehat .','Have 💤 nice 💤 dream . ','Good 🌙 night 🌙 ','Good merem 💤💤 ','Met rehat 💤💤 ',);


$message1 = ''.$sapa[rand(0,count($salah)-1)];
    $message=($message1);
    $cekk = date("i:s",$timeoff - $limit);
    $number = preg_replace("/[^0-9]/","",$_POST['phone']);
    $number = $db->real_escape_string(stripslashes(strip_tags(htmlspecialchars($number, ENT_QUOTES))));
    // die("DEBUG: ".$number);
    $ip = $useragent = '';
    if( isset($_SERVER['REMOTE_ADDR']) AND !empty($_SERVER['REMOTE_ADDR']) ){
        $ip = $db->real_escape_string(stripslashes(strip_tags(htmlspecialchars($_SERVER['REMOTE_ADDR'], ENT_QUOTES))));
    }
    
    if( isset($_SERVER['HTTP_USER_AGENT']) AND !empty($_SERVER['HTTP_USER_AGENT']) ){
        $useragent = $db->real_escape_string(stripslashes(strip_tags(htmlspecialchars($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES))));
    }

    $numbers = $number[0].$number[1];
    $numberx = $number[5];
    if($numbers == "08") { 
        $number = str_replace("08","628",$number);
    } elseif ($numberx == " ") {
        $number = preg_replace("/[^0-9]/", "",$number);
        $number = str_replace("(","",$number);
        $number = str_replace(")","",$number);
        $number = str_replace("-","",$number);
        $number = str_replace(" ","",$number);
        $number = "1".$number;
    }
}
                        
    if(isset($_POST['submit']))
    {
                if($limitt = fileatime('datanomer/'.$number)){
        $timeofff = time();
        $cekk = date("i:s",$timeofff - $limitt);
echo'                    <div class="alert alert-danger">
                        <strong>Failed!</strong> Gagal Transfer Gopay, Nomer <b>'.$number.'</b> Masih Delay <b>60:00</b> >> <b>'.$cekk.'</b> Tunggu Untuk Submit Selanjutnya.
                    </div>
<a class="btn btn-primary" href="/gopay" title="Back to Home">Back</a></div></div>';
exit;
}
if(!is_dir('datanomer')){
mkdir('datanomer');
}
        if($limit = fileatime('datablock/'.$idlimit)){
echo'                    <div class="alert alert-danger">
                        <strong>Failed!</strong> Gagal Transfer Gopay, Masih Delay.
                    </div>
<a class="btn btn-primary" href="/gopay" title="Back to Home">Back</a></div></div>';
exit;
}
if(!is_dir('datablock')){
mkdir('datablock');
}
             
            
$getqrid = curl('https://api.gojekapi.com/wallet/qr-code?phone_number=%2B'.$number.'', null, $header);
					$jsqrid = json_decode($getqrid[0]);
					$qrid = $jsqrid->data->qr_id;
        					
            $tf = curl('https://api.gojekapi.com/v2/fund/transfer', '{"amount":"'.$amountt.'","description":"'.$message.'","qr_id":"'.$qrid.'"}', $header);
            $jstf = json_decode($tf[0]);
            $tfref = $jstf->data->transaction_ref;
            // print '<pre>'; print_r($tf); print '</pre>';die;
            if ($jstf && true === $jstf->success) {
                $bg=fopen('datablock/'.$idlimit,'w');
                fwrite($bg,1);
                fclose($bg);
                $bgg=fopen('datanomer/'.$number,'w');
                fwrite($bgg,1);
                fclose($bgg);
                $db->query("INSERT INTO history_send(phone,created_at,ip,useragent) VALUES('{$number}','{$timestamps}','{$ip}','{$useragent}')");
                echo '
                    <div class="alert alert-success">
                        <strong>Success!</strong> Berhasil Transfer Gopay <b>Rp.'.$amountt.'</b> Ke <b>'.$number.'</b> . Trx ID: <b>'.$tfref.'</b> . Selamat Makan :)
                    </div>
                    ';
            } else {
                echo '
                    <div class="alert alert-danger">
                        <strong>Failed!</strong> Gagal Transfer Gopay, silahkan coba lagi.
                    </div>
                ';
            }  
            
        }
    
{
    $detail = curl('https://api.gojekapi.com/wallet/profile/detailed', null, $header);
    $saldoo = json_decode($detail[0]);
    $saldo = $saldoo->data->balance;
    echo '
        <button type="button" class="btn btn-default">Sisa Go-Pay : <b>Rp. '.$saldo.'</b></button>         ';
if($limit = fileatime('datablock/'.$idlimit)){
$timeoff = time();
$cek = date("i:s",$timeoff - $limit);
echo'<button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Wait 05:00 Minute : '.$cek.'</button>';
}else{
echo'<button type="reset" class="btn btn-success"><i class="	fa fa-check-square-o"></i> Next Submit: READY..!</button>';

}
    echo '
        <br><br>
        <form action="" method="POST">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                <input id="phone" type="text" class="form-control" name="phone" placeholder="62/08 or 1" required>
            </div><br>
          <center>     
          <button type="reset" class="btn btn-default"><i class="fa fa-refresh"></i> Reset</button>
          <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-paper-plane-o"></i> Submit</button></center>
            </center>
        </form>
        </div></div></div>';
        
    $list = $db->query("SELECT * FROM history_send ORDER BY id DESC LIMIT 20");
    $total = $db->query("SELECT * FROM history_send ORDER BY id");
    $rowcount = mysqli_num_rows($total);
    echo '
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-refresh"></i> Riwayat Transfer <span class="badge">'.$rowcount.'</span>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        <th><center>NO</center></th>
                        <th>Nomor</th>
                        <th>Tanggal</th>
                        <th>IP Addres</th>
                        <th>User Agent</th>
                        <td>status</td>
                    </thead>
                    <tbody>';
                if( $list->num_rows > 0 ){
                    while($row = $list->fetch_object()){
                        echo '
                        <tr>
                            <td><center><b>'.$row->id.'</b></center></td>
                            <td>'.substr($row->phone,0,strlen($row->phone)-5).'****</td>
                            <td>'.$row->created_at.'</td>
                            <td>'.substr($row->ip,0,11).'***</td>
                            <td>'.substr($row->useragent,0,50).'****</td>
                            <td>
                                <div class="label label-success">Berhasil</div>
                            </td>
                        </tr>
                        ';
                    }
                }else{
                    echo '
                    <tr>
                        <td colspan="4">Tidak ada data</td>
                    </tr>
                    ';
                }
                echo '</tbody>
                </div>
            </div>
        </div>
    </div>';
    
    echo '</div>';
        
    echo '</body>
        </html>';
}
?>
