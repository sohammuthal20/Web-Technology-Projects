<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemID = $_POST["itemID"];
    $itemName = $_POST["itemName"];
    $itemQuantity = $_POST["itemQuantity"];

    $items = [];

    if (isset($_SESSION["items"])) {
        $items = $_SESSION["items"];
    }

    $items[] = [
        "itemID" => $itemID,
        "itemName" => $itemName,
        "itemQuantity" => $itemQuantity,
    ];

    $_SESSION["items"] = $items;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Assignment 8</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h2 {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Shopping Application Form</h2>
    <div class="container">
        <div class="form-container">
            <h3>Add Item</h3>
            <form action="" method="post">
                <label for="itemID">Item ID:</label>
                <input type="text" id="itemID" name="itemID" required><br>

                <label for="itemName">Item Name:</label>
                <input type="text" id="itemName" name="itemName" required><br>

                <label for="itemQuantity">Item Quantity:</label>
                <input type="number" id="itemQuantity" name="itemQuantity" required><br>

                <input type="submit" value="Add Item">
            </form>
        </div>
    </div>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION["items"])) {
                    $items = $_SESSION["items"];

                    foreach ($items as $item) {
                        echo "<tr>";
                        echo "<td>" . $item["itemID"] . "</td>";
                        echo "<td>" . $item["itemName"] . "</td>";
                        echo "<td>" . $item["itemQuantity"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No items added yet.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>