<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h2>Contact Form</h2>
    <p>* fields are mandatory fields.</p>
    <p id="error_message" style="color: red;">
        <?php
        if (isset($_GET['error_message'])) {
            echo $_GET['error_message'];
        }
        ?>
    </p>

    <form action="validateprocess.php" method="post" name="contactform">
        <table>
        <tr>
            <td>Name *</td>
            <td><input type="text" minlength="3" name="name" id="name"></td>
        </tr>

        <tr>
            <td>Email *</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>

        <tr>
            <td>Phone *</td>
            <td>
                <select name="ccode" id="ccode">
                    <option value="+977" selected="true">+977</option>
                    <option value="+91">+91</option>
                    <option value="+86">+86</option>
                    <option value="+82">+82</option>
                    <option value="+81">+81</option>
                    <option value="others"> </option>
                </select>
                <input type="tel" name="phone" id="phone">
            </td>
        </tr>

        <tr>
            <td>Country *</td>
            <td>
            <select name="country" id="country">
                <option value="">Select Country</option>
                <optgroup label="Asia">
                    <option value="Nepal">Nepal</option>
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="Korea">Korea</option>
                    <option value="Japan">Japan</option>
                </optgroup>
                <optgroup label="Europe">
                    <option value="Germany">Germany</option>
                    <option value="Italy">Italy</option>
                    <option value="Denmark">Denmark</option>
                    <option value="France">France</option>
                    <option value="Greece">Greece</option>
                </optgroup>
                <optgroup label="Other countries">
                    <option value="others">Others</option>
                </optgroup>
            </select>
            </td>
        </tr>

        <tr>
            <td>Message *</td>
            <td>
                <textarea name="message" id="message" minlength="8" maxlength="100" cols="30" rows="10"></textarea>
            </td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
        </table>
    </form>
</body>
</html>