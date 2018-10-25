
   <head>
      <title><html>
      Dinamically add textbox, radio button
      </title>
      <script language="Javascript">
      function addTextBox(type) {
         //Create an input type dynamically and insert in front of the button
         var newTextBox = document.createElement("input");
         var button = document.getElementById("button");
         newTextBox.setAttribute("type", "text");
         if (type == 1)
         {
            newTextBox.setAttribute("name", "name[]");
         }
         else
         {
            newTextBox.setAttribute("name", "job[]");
         }

         var divTag = document.getElementById("textbox");
         divTag.appendChild(newTextBox);
         divTag.insertBefore(document.createElement("BR"), button);
         divTag.insertBefore(document.createElement("BR"), button);
         divTag.insertBefore(newTextBox, button);
         divTag.insertBefore(document.createTextNode(" "), button);
      }

      </script>
   </head>
   <body>
   <form id = "nameForm">
      <h2>Dynamically add textbox, and radio button in form</h2>
      <br/>
      <h3>Please select any type</h3>

      
      <div id="textbox">
         <input type="text" name="names[]" id="input">
         <input type="button" id="button" value="Add Name" onclick="addTextBox(1)"/>
      </div>
   </form>
   </body>
</html>