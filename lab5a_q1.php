<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php 

        $name = "Fazreen Saleha Binti Ismail";
        $matricNumber = "AI220045"; // Replace with your matric number
        $course = "Bachelor of Computer Science (Information Security)";
        $yearOfStudy = "3rd Year"; 
        $address = "Fakulti Sains Komputer dan Teknologi Maklumat Universiti Tun Hussein Onn Malaysia 86400 Parit Raja, Batu Pahat, Johor";
    ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td><strong>Matric Number</strong></td>
            <td><?php echo $matricNumber; ?></td>
        </tr>
        <tr>
            <td><strong>Course</strong></td>
            <td><?php echo $course; ?></td>
        </tr>
        <tr>
            <td><strong>Year of Study</strong></td>
            <td><?php echo $yearOfStudy; ?></td>
        </tr>
        <tr>
            <td><strong>Address</strong></td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>
