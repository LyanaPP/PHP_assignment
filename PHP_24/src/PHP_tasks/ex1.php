<?php
$title = "Getting Started with PHP-Pengpeng";
$md="Please use appropriate meta Description";
include 'header.php'; ?>

    <h3>Task 1: Output a Message</h3>
    <?php
        // Task 1: Output a Message
        echo "Hello world! My name is \"YangPengpeng\"<br>";
        
        echo "Hello world! My name is \"David\"";
    ?>

    <h3>Task 2: Use PHP Variable in Heading 4</h3>
    <?php
        // Task 2: Use PHP Variable in Heading 4
        $title = "PHP is interesting.";
        echo "<h4>$title</h4>";
    ?>

    <h3>Task 3: Display Grades in HTML Table</h3>
    <?php
        // Task 3: Display Grades in HTML Table
        $g1 = 5;
        $g2 = 4;
        $g3 = 5;
    ?>

    <table border="1">
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>John</td>
            <td><?php echo $g1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alice</td>
            <td><?php echo $g2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bob</td>
            <td><?php echo $g3; ?></td>
        </tr>
    </table>
    <h3>Development Environment Setup</h3>
<img src="images/development environment setup.jpg" alt="Development Environment Screenshot">


<?php include 'footer.php'; ?>