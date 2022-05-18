<!DOCTYPE html>
<html>
   <head>
      <!-- Metadata -->
      <meta charset="utf-8">
      <meta name="description" content="While Loops, with PHP">
      <meta name="keywords" content="immaculata, ics2o">
      <meta name="author" content="Marcus Wehbi">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Link for favicon -->
      <link rel="icon" href="./fav_index/favicon.ico">
      <link rel="manifest" href="./fav_index/site.webmanifest">
      <!-- Link for stylesheet -->
      <link rel="stylesheet" href="./css/style.css">
      <!-- Webpage title -->
      <title>Even Number Display</title>
   </head>
   <body>
      <!-- Webpoage headers -->
      <h1>NumberDisplay in PHP</h1>
      <h3>This program will display all even numbers within a minimum and maximum:</h3>
      <!-- Table to format page (form, image, etc.) -->
      <table>
         <tr align = "center">
            <td valign="top" align="right">
               <!-- Form to retrieve information (Users min and max of choice) -->
               <form action="./display.php" method="post" target="result">
                  <label for="min">Enter a minimum Number:</label>
                  <input type="number" step="1" name="min" id="min"><br><br>		
                  <label for="max">Enter a maximum Number:</label>
                  <input type="number" step="1" name="max" id="max"><br><br>	
                  <!-- Submit button -->
                  <input type="submit" value="Display Numbers">
               </form>
            </td>
            <!-- Image -->
            <td valign="top" align="left">
               <img src="./images/nm.jpeg" alt="Numbers" width="40%">
            </td>
         </tr>
      </table>
      <!-- Iframe for results -->
      <iframe id="result" name="result">
      </iframe>
   </body>
</html>