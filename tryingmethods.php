<!DOCTYPE html>
<html>
<body>

<h2>The JavaScript <i>this</i> Keyword</h2>

<p>In this example, <b>this</b> represents the <b>person</b> object.</p>
<p>Because the person object "owns" the fullName method.</p>

<p id="demo"></p>

<script>
// Create an object:
var person = {
  firstName: "John",
  lastName : "Doe",
  id     : 5566,
  fullName : function() {
    return this.firstName + " " + this.lastName;
  }
};

// Display data from the object:
document.getElementById("demo").innerHTML = person.fullName();
</script>

</body>
</html>
