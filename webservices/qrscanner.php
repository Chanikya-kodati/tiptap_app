 <?php
	error_reporting(0);
    include('phpqrcode/qrlib.php');
    include('phpqrcode/qrconfig.php');
	
	echo $id = $_REQUEST['uid']; die;

    // how to build raw content - QRCode with simple Business Card (VCard)
    
    $tempDir = "../uploads/receiverQRscanners/";
	
	$query = "SELECT * FROM tiptap_customers WHERE id='$id'";
	$dbcontroller = new DBController();
	$this->dealerads = $dbcontroller->executeSelectQuery($query);
	$fullname = $this->dealerads[0]['fullname'];	
    $mobile = $this->dealerads[0]['mobile'];	
	
	$query = "UPDATE tiptap_customers SET qrscannerimage='Receiver_$id.png' WHERE id='$id'";  
	$dbcontroller = new DBController();
	$result = $dbcontroller->executeQuery($query);
    
    // here our data
    $receiverid = $id;
    $name = $fullname;
    $phone = $mobile;
    
    // we building raw data
    $codeContents  = 'BEGIN:VCARD'."\n";
    $codeContents .= 'FN:'.$name."\n";
    $codeContents .= 'TEL;WORK;VOICE:'.$receiverid."\n";
    $codeContents .= 'END:VCARD';
    
    // generating
    QRcode::png($codeContents, $tempDir.'025.png', QR_ECLEVEL_L, 3);
   
    // displaying
    echo '<img src="'.$tempDir.'Receiver_'.$receiverid.'.png" />';
     