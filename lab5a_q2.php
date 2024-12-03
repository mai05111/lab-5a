<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
        $students = [
            ['name' => 'Alice', 'program' => 'BIP', 'age' => 21],
            ['name' => 'Bob', 'program' => 'BIS', 'age' => 20],
            ['name' => 'Raju', 'program' => 'BIT', 'age' => 22],
        ];
    ?>

    <!-- Display the table -->
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['program']; ?></td>
            <td><?php echo $student['age']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
