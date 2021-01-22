function show(){
    document.getElementById("popup").style.display = "block";
  }
  function hide() {
    document.getElementById("popup").style.display = "none";
    
    document.getElementById("name").value = "";
    document.getElementById("age").value = "";
    document.getElementById("country").value = "";
  }
  
  function add() {
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var country = document.getElementById("country").value;
    
    if (name == "" || age == "" || country == "") {
      alert("Please fill all fields.")
    } else {
      document.getElementById("popup").style.display = "none";
      var newdiv = document.createElement("div");
      newdiv.className += "cont";
      newdiv.innerHTML = "Name: "+ name + "<br>Age: " + age + "<br>Country: " + country;
      document.getElementById("results").appendChild(newdiv);
      
      document.getElementById("name").value = "";
      document.getElementById("age").value = "";
      document.getElementById("country").value = "";
    }
  }