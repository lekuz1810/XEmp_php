window.addEventListener('load', function () {
    document.getElementById('spinner').style.display = 'none';
});

function changeText(event){
  var selectedValue = event.target.value;
  
  console.log("Selected value:", selectedValue); // Debugging log

  // Hide all content sections initially
  document.getElementById('mainHeroContent_1').style.display = "none";
  document.getElementById('mainHeroContent_2').style.display = "none";
  document.getElementById('mainHeroContent_3').style.display = "none";

  // Show the appropriate content based on the selected option
  if (selectedValue === "BGVVendor") {
    console.log("Displaying mainHeroContent_2"); // Debugging log
    document.getElementById('mainHeroContent_2').style.display = "block";
  }
  else if (selectedValue === "ExEmployee") {
    console.log("Displaying mainHeroContent_3"); // Debugging log
    document.getElementById('mainHeroContent_3').style.display = "block";
  }
  else {
    console.log("Displaying mainHeroContent_1"); // Debugging log
    document.getElementById('mainHeroContent_1').style.display = "block"; // Default display if no specific option is selected
  }
}


function confirm(){
      document.getElementById('PrePaymentTable').style.display="none";
      document.getElementById('PostPaymentTable').style.display="block";
      document.getElementById('ConfirmButton').style.display="none";
      document.getElementById('PrintButton').style.display="block";

}