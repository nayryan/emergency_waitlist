// Code.html script
document.getElementById("access-code").addEventListener("input", function() {
    var pattern = /^\d{3}$/;
    if(pattern.test(this.value)) {
        this.style.borderColor = "green";
    } else {
        this.style.borderColor = "red";
    }
});

// Patient.html script
function refreshWaitingInfo() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            document.getElementById("waiting-time").innerText = response.waitingTime;
            document.getElementById("people-ahead").innerText = response.peopleAhead;
        }
    };
    xhr.open("GET", "get_waiting_info.php?code=" + encodeURIComponent(yourCode), true);
    xhr.send();
}
// Call refreshWaitingInfo() every 5 minutes
setInterval(refreshWaitingInfo, 300000); // 300000 milliseconds = 5 minutes
window.onload = refreshWaitingInfo;

// Form.html script
document.getElementById("add-patient-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    var xhr = new XMLHttpRequest();
    var formData = new FormData(this); 

    xhr.open("POST", "add_patient.php", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert("Patient added successfully!");
            document.getElementById("add-patient-form").reset();
        } else {
            // Handle error
            alert("Something went wrong. Please try again.");
        }
    };
    xhr.send(formData);
});