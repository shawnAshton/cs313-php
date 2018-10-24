
   <head>
      <title><html>
      Dinamically add textbox, radio button
      </title>
      <script language="Javascript">
      function add(type) {
         //Create an input type dynamically.
         var element = document.createElement("input");
         //Assign different attributes to the element.
         element.setAttribute("type", type);
         element.setAttribute("value", type);
         element.setAttribute("name", type);
         var foo = document.getElementById("fooBar");
         //Append the element in page (in span).
         foo.appendChild(element);
      }

      </script>
   </head>
   <body>
   <form>
      <h2>Dynamically add textbox, and radio button in form</h2>
      <br/>
      <h3>Please select any type</h3>

      <input type="text" name="names[]">

      <select name="element">
         <option value="button">Button</option>
         <option value="text">TextBox</option>
         <option value="radio">Radio</option>
      </select>
      <input type="button" value="add" onclick="add(document.forms[0].element.value)"/>
      <span id="fooBar">&nbsp;</span>
   </form>
   </body>
</html>