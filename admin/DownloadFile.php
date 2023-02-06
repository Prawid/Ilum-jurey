<?Php
//Susunan Struktur File :> $upload = 'File/501-862-1-SM.Pdf';
$upload = $_GET['Url'];
//$upload = 'tes/501-862-1-SM.Pdf';
if (File_exists($upload)) {
    Header('Content-Description: File Transfer');
    Header('Content-Type: Application/Octet-Stream');
    Header('Content-Disposition: Attachment; Filename="' . Basename($upload) . '"');
    Header('Expires: 0');
    Header('Cache-Control: Must-Revalidate');
    Header('Pragma: Private');
    Header('Content-Length: ' . Filesize($upload));
    Readfile($upload);
    //get_included_files($upload);
    exit;
}
