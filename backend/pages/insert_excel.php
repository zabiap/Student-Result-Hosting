<?php

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;


require_once '../excel/Autoloader/autoload.php';
require '../connect.php';


//echo $_FILES['file']['name'];

// check file name is not empty
if (!empty($_FILES['pcmb']['name'])) {

    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["pcmb"]["name"]);

    // check file has extension xlsx, xls and also check 
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') 
        && $_FILES['pcmb']['size'] > 0 ) {

        // Temporary file name
        $inputFileName = $_FILES['pcmb']['tmp_name']; 

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($inputFileName);
        $count = 1;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {

                // It reads data after header. In the my excel sheet, 
                // header is in the first row. 
                if ($count > 1) { 

                    // Data of excel sheet
                    $data[0] = $row[0];
                    $data[1] = $row[1];
                    $data[2] = $row[2];
                    $data[3] = $row[3];
                    $data[4] = $row[4];
                    $data[5] = $row[5];
                    $data[6] = $row[6];
                    $data[7] = $row[7];
                    $data[8] = $row[8];
                    $data[9] = $row[9];
                    $data[10] = $row[10];
                    $data[11] = $row[11];
                    $data[12] = $row[12];

                    /*print_r($data);*/
                    $sql = "INSERT INTO pcmb 
                            (name, reg_no, lang_id, language_1, english, physics_e,	physics_l, chemistry_e, chemistry_l, maths, biology_e, biology_l, result) 
                            VALUES
                            ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]', '$data[12]')";
                    if ($conn->query($sql) === TRUE) 
                    {                        

                    }
                    else
                    {
                        echo("Error: " . $conn -> error . "<br>");                        
                    }

                }
                $count++;
            }
        }

        // Close excel file
        $reader->close();
        header( "refresh:5;url={$link}backend/pages/add_excel.php" );
        echo "<h1>Data Added Successfully.</h1><br>Redirecting you in 5 seconds";

    } 
    else {
        echo "Please Select Valid Excel File";
    }

} 
else { 
    echo "Please Select Excel File";

}

if (!empty($_FILES['pcmc']['name'])) {

    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["pcmc"]["name"]);

    // check file has extension xlsx, xls and also check 
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') 
        && $_FILES['pcmc']['size'] > 0 ) {

        // Temporary file name
        $inputFileName = $_FILES['pcmc']['tmp_name']; 

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($inputFileName);
        $count = 1;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {

                // It reads data after header. In the my excel sheet, 
                // header is in the first row. 
                if ($count > 1) { 

                    // Data of excel sheet
                    $data[0] = $row[0];
                    $data[1] = $row[1];
                    $data[2] = $row[2];
                    $data[3] = $row[3];
                    $data[4] = $row[4];
                    $data[5] = $row[5];
                    $data[6] = $row[6];
                    $data[7] = $row[7];
                    $data[8] = $row[8];
                    $data[9] = $row[9];
                    $data[10] = $row[10];
                    $data[11] = $row[11];
                    $data[12] = $row[12];

                    /*print_r($data);*/
                    $sql = "INSERT INTO pcmc 
                            (name, reg_no, lang_id, language_1, english, physics_e,	physics_l, chemistry_e, chemistry_l, maths, cs_e, cs_l, result) 
                            VALUES
                            ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]', '$data[11]', '$data[12]')";
                    if ($conn->query($sql) === TRUE) 
                    {                        

                    }
                    else
                    {
                        echo("Error: " . $conn -> error . "<br>");                        
                    }

                }
                $count++;
            }
        }

        // Close excel file
        $reader->close();
        header( "refresh:5;url={$link}backend/pages/add_excel.php" );
        echo "<h1>Data Added Successfully.</h1><br>Redirecting you in 5 seconds";

    } 
    else {
        echo "Please Select Valid Excel File";
    }

} 
else { 
    echo "Please Select Excel File";

}

if (!empty($_FILES['ebac']['name'])) {

    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["ebac"]["name"]);

    // check file has extension xlsx, xls and also check 
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') 
        && $_FILES['ebac']['size'] > 0 ) {

        // Temporary file name
        $inputFileName = $_FILES['ebac']['tmp_name']; 

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($inputFileName);
        $count = 1;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {

                // It reads data after header. In the my excel sheet, 
                // header is in the first row. 
                if ($count > 1) { 

                    // Data of excel sheet
                    $data[0] = $row[0];
                    $data[1] = $row[1];
                    $data[2] = $row[2];
                    $data[3] = $row[3];
                    $data[4] = $row[4];
                    $data[5] = $row[5];
                    $data[6] = $row[6];
                    $data[7] = $row[7];
                    $data[8] = $row[8];
                    $data[9] = $row[9];
                    $data[10] = $row[10];

                    /*print_r($data);*/
                    $sql = "INSERT INTO ebac 
                            (name, reg_no, lang_id, lang_1, english, economics,	buisness_studies, accountancy, cs_e, cs_l, result) 
                            VALUES
                            ('$data[0]', '$data[1]', '$data[2]', '$data[3]', '$data[4]', '$data[5]', '$data[6]', '$data[7]', '$data[8]', '$data[9]', '$data[10]')";
                    if ($conn->query($sql) === TRUE) 
                    {                        

                    }
                    else
                    {
                        echo("Error: " . $conn -> error . "<br>");                        
                    }

                }
                $count++;
            }
        }

        // Close excel file
        $reader->close();
        header( "refresh:5;url={$link}backend/pages/add_excel.php" );
        echo "<h1>Data Added Successfully.</h1><br>Redirecting you in 5 seconds";

    } 
    else {
        echo "Please Select Valid Excel File";
    }

} 
else { 
    echo "Please Select Excel File";

}


?>