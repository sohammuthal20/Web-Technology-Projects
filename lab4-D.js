<html>
<head>
    <title>Append Row to Table</title>
</head>
<body>
    <table id="myTable" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <td>Row 1, Cell 1</td>
            <td>Row 1, Cell 2</td>
        </tr>
        <tr>
            <td>Row 2, Cell 1</td>
            <td>Row 2, Cell 2</td>
        </tr>
    </table>

    <button onclick="appendRow()">Add Row</button>

    <script>
        function appendRow() {
            // Create a new row HTML string
            var newRowHTML = '<tr><td>New Row, Cell 1</td><td>New Row, Cell 2</td></tr>';

            // Append the new row to the table
            document.getElementById("myTable").innerHTML += newRowHTML;
        }
    </script>
</body>
</html>