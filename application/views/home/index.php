<html>

<head>
    <script>
        function onButtonClick() {
            console.log(this);
        }
    </script>
</head>

<body>
    <H1>
        HELLO WORLD
    </H1>
    <h2>
        <?php echo $this->parameter ?>
    </h2>
    <h3>
        <?php echo (json_encode($this->users[0])); ?>
    </h3>
    <button onclick="onButtonClick()">
        Test To Click
    </button>
</body>

</html>