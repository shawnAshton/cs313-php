
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
         newTextBox.setAttribute("type", type);
         newTextBox.setAttribute("value", type);
         newTextBox.setAttribute("name", type);
         var divTag = document.getElementById("textbox");
         //Append the newTextBox in page (in span).
         
         divTag.appendChild(newTextBox);
         divTag.insertBefore(newTextBox, button);
         divTag.appendChild(document.createElement("BR"));

         // var form = document.getElementById("nameForm");
         // form.appendChild("<br>");

      }

      </script>
   </head>
   <body>
   <form id = "nameForm">
      <h2>Dynamically add textbox, and radio button in form</h2>
      <br/>
      <h3>Please select any type</h3>

      <input type="text" name="names[]" id="input">

      <select name="element" id="extra">
         <option value="button">Button</option>
         <option value="text">TextBox</option>
         <option value="radio">Radio</option>
      </select>
      <input type="button" value="add" onclick="add(document.forms[0].element.value)"/>
      
      <div id="textbox">
         <input type="button" id="button" value="addText" onclick="add(document.getElementById('input').value)"/>
      </div>
   </form>
   </body>
</html>