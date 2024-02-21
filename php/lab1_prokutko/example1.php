<!DOCTYPE html>
<html>
<head>
    <title>Temperature Calculator</title>
</head>
<body>
    <h2>Введіть номер завдання:</h2>
    <ul>
        <li>1 - обчислення максимальної температури;</li>
        <li>2 - обчислення мінімальної температури;</li>
        <li>3 - обчислення середньої температури.</li>
    </ul>
    <form method="post">
        <label for="task">Номер завдання:</label>
        <input type="text" id="task" name="task"><br><br>
        <label for="temp1">Температура 1:</label>
        <input type="text" id="temp1" name="temp1"><br><br>
        <label for="temp2">Температура 2:</label>
        <input type="text" id="temp2" name="temp2"><br><br>
        <label for="temp3">Температура 3:</label>
        <input type="text" id="temp3" name="temp3"><br><br>
        <input type="submit" value="Виконати">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $task = $_POST['task'];
        $temp1 = $_POST['temp1'];
        $temp2 = $_POST['temp2'];
        $temp3 = $_POST['temp3'];

        // Perform calculations based on the task number
        switch ($task) {
            case 1:
                $max_temp = max($temp1, $temp2, $temp3);
                echo "<p>Максимальна температура: $max_temp</p>";
                break;
            case 2:
                $min_temp = min($temp1, $temp2, $temp3);
                echo "<p>Мінімальна температура: $min_temp</p>";
                break;
            case 3:
                $avg_temp = ($temp1 + $temp2 + $temp3) / 3;
                echo "<p>Середня температура: $avg_temp</p>";
                break;
            default:
                echo "<p>Невірний номер завдання. Будь ласка, введіть 1, 2 або 3.</p>";
        }
    }
    ?>
</body>
</html>
