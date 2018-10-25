
   <head>
      <title><html>
      Dinamically add textbox, radio button
      </title>
      <script language="Javascript">
      function add(type) {
         //Create an input type dynamically.
         var newTextBox = document.createElement("input");
         var button = document.getElementById("button");
         //Assign different attributes to the newTextBox.
         newTextBox.setAttribute("type", "text");
         newTextBox.setAttribute("name", "name[]");
         var divTag = document.getElementById("textbox");
         //Append the newTextBox in page (in span).

         divTag.appendChild(newTextBox);
         divTag.insertBefore(document.createElement("BR"), button);
         divTag.appendChild(document.createTextNode(" "))
         divTag.insertBefore(newTextBox, button);
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
         <input type="button" id="button" value="addText" onclick="add(document.getElementById('input').value)"/>
      </div>
   </form>
   </body>
</html>