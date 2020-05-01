<html>

<head>
    <script>
        function onEdit(id){
            window.location.href = "/index?a=update&id=" + id;
        }
    </script>
</head>

<body>
    <h1>
        List Of Makes
    </h1>
    <a href="/index?a=create">Create</a>
    <?php
    if (count($this->makes) > 0) {
        echo "
            <table>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Abrv
                    </th>
                    <th>
                        Date Created
                    </th>
                    <th>
                        Last Update
                    </th>
                </tr>";
        foreach ($this->makes as &$value) {
            echo "<tr onclick=\"onEdit(" . $value["Id"] . ")\">
                <td>". $value["Id"] . "</td>
                <td>". $value["Name"] . "</td>
                <td>". $value["Abrv"] . "</td>
                <td>". $value["DateCreated"] . "</td>
                <td>". $value["DateUpated"] . "</td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<h2> List is empty </h2>";
    }
    ?>
</body>

</html>