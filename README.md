# db2_err
Helper Codeigniter DB2 Error Message SQLCODE and SQLSTATE


Usage : 

$error = new db2_err();<br>
$sqlcode = $error->sqlcode($str);<br>
$sqlstate = $error->sqlstate($str);<br>
echo $sqlcode['pesan'];<br>
echo $sqlstate['pesan'];
