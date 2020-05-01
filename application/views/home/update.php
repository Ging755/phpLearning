<html>

<body>
    <h1>
        Edit Page
    </h1>
    <form action="/index?a=update" method="put">
        Name: <input value=<?php echo $this->make->Name; ?> type="text" name="fname">
        Abrv: <input value=<?php echo $this->make->Abrv; ?> type="text" name="fabrv">
        <input type="submit">
    </form>
</body>

</html>