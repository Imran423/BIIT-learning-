<?php
require_once "Demo.php";
$M = new Demo();
$res = $M->demo();

?>

<form action=""method="post">
    <table border="1">
        <tr>
            <td> First Number</td>
            <td><input type="text" name="first_number"> </td>
        </tr>
        <tr>
            <td> Last Number</td>
            <td><input type="text" name="last_number"> </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="radio" name="check" value="odd">ODD
                <input type="radio" name="check" value="even">EVEN
            </td>
        </tr>
        <tr>
            <td>Result</td>
            <td>
                <textarea rows="5" cols="30">
                    <?php echo $res; ?>
                </textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="Press Me">
            </td>
        </tr>

    </table>
</form>


