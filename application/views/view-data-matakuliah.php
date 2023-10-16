<html> 
 
<head> 
    <title>Daftar Tamu</title> 
</head> 
 
<body>
    <div id="wrapper">
        <?php $this->load->view('v_header'); ?> <!-- Menyertakan header --> 
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                    Tampilan Daftar Tamu 
                </th> 
            </tr> 
            <tr> 
                <td colspan="3"> 
                    <hr> 
                </td> 
            </tr> 
            <tr> 
                <td>Nama</td> 
                <td>:</td> 
                <td> 
                    <?= $nama; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Email</td> 
                <td>:</td> 
                <td> 
                    <?= $email; ?> 
                </td> 
            </tr> 
            <tr> 
                <td>Komentar</td> 
                <td>:</td> 
                <td> 
                    <?= $komentar; ?> 
                </td> 
            </tr>
            <tr>
                <td colspan="3"> 
                    <hr> <!-- Garis di bawah "Komentar" -->
                </td>
            </tr>
            <tr> 
                <td colspan="3" align="center"> 
                    <a><b>Terima kasih telah mengisi daftar tamu ...</b></a> 
                </td> 
            </tr> 
        </table>
    </center> 
    <?php $this->load->view('v_footer'); ?> <!-- Menyertakan footer -->
    </div>
</body> 
</html> 