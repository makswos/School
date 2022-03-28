<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <title>Zaliczenie</title>
</head>
<body>


    <form method="POST">
      <table>
        <tr>
          <th>Company: </th>
          <td> <input type="text" name="Company"></td>
        </tr>
      <tr>
        <th>First Name: </th>
        <td> <input type="text" name="First"></td>
      </tr>
      <tr>
        <th>Last Name: </th>
        <td> <input type="text" name="Last"></td>
      </tr>
      <tr>
        <th>E-mail address: </th>
        <td> <input type="text" name="mail"></td>
      </tr>
      <tr>
        <th>Title: </th>
        <td> <input type="text" name="title"></td>
      </tr>
      <tr>
        <th>Phone: </th>
        <td> <input type="text" name="Phone"></td>
      </tr>
      <tr>
        <th>Cancel Registration : </th>
        <td> <input type=submit value="reset"></td>
      </tr>
      <tr>
        <th>252 Training Session 2010: </th>
        <td> <select name="selec">
          <option value="Wartość 1">Wartość 1</option>
          <option value="Wartość 2">Wartość 2</option>
          <option value="Wartość 3">Wartość 3</option>
        </select>
        </td>
      </tr>
      <tr>
        <th>Job Function: </th>
        <td>
          <ul style="list-style-type: none" name="t">
            <li><input type=radio value="Campaign" name="t"> Campaign</li>
            <li><input type=radio value="CRM Administration" name="t"> CRM Administration</li>
            <li><input type=radio value="Email Deployment" name="t"> Email Deployment</li>
          </ul>
        </td>
      </tr>
      <tr>
        <th>Dietary Requirements: </th>
        <td> <input type="list" name="Di"></td>
      </tr>
      <tr>
        <th>Expectation: </th>
        <td> <textarea name="pole" cols="30" rows="10"></textarea></td>
      </tr>
      </table>

    <input type="submit" name="button">
    </form>

    <?php

    if((!empty($_POST['First'])) && (!empty($_POST['Last'])) && (!empty($_POST['mail'])) && (!empty($_POST['title'])) && (!empty($_POST['Phone'])) && (!empty($_POST['t']))
    && (!empty($_POST['selec'])))

    {
    if(isset($_POST['button'])){


          echo $_POST['Company'];
          echo "<br>";
          echo $_POST['First'];
          echo "<br>";
          echo $_POST['Last'];
          echo "<br>";
          echo $_POST['mail'];
          echo "<br>";
          echo $_POST['title'];
          echo "<br>";
          echo $_POST['Phone'];
          echo "<br>";
          echo $_POST['selec'];
          echo "<br>";
          echo $_POST['t'];
          echo "<br>";
          echo $_POST['Di'];
  }
}
else
{

}




    ?>

</body>
</html>
