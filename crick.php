<?php
// Array to store the names of Indian cricket players
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "Shikhar Dhawan",
    "KL Rahul",
    "MS Dhoni",
    "Hardik Pandya",
    "Jasprit Bumrah",
    "Ravindra Jadeja",
    "Cheteshwar Pujara",
    "Rishabh Pant"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
        }
        th {
            background-color: #f2f2f2;
        }
        td {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">List of Indian Cricket Players</h2>
    
    <!-- Table to display player names -->
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Player Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Loop through the array and display each player name in the table
            foreach ($players as $index => $player) {
                echo "<tr>";
                echo "<td>" . ($index + 1) . "</td>";  // Displaying the player number (1, 2, 3,...)
                echo "<td>" . $player . "</td>";        // Displaying player name
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>

