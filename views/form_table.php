<form method="post" action="<?php echo config::$url_base.'examples/form_table'; ?>">
    <table>
    
        <tr>
            <th colspan="2">FORM</th>
        </tr>
        <tr>
            <th>NAME</th>
            <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="name"></td>
        </tr>
        <tr>
            <th>FIRST NAME</th>
            <td><input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="firstname"></td>
        </tr>
        <tr>
            <th>COUNTRY</th>
            <td>
                <select name="country">
                    <option>North Pole</option>
                    <option>South Pole</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit"></td>
        </tr>
        <tr>
            <th colspan="2">TABLE</th>
        </tr>
        <tr>
            <th>NAME</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>FIRST NAME</th>
            <td><?php echo $firstname; ?></td>
        </tr>
        <tr>
            <th>COUNTRY</th>
            <td><?php echo $country; ?></td>
        </tr>
    </table>
</form>