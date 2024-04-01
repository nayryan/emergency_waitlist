function refreshWaitTime() {
    console.log("Rafraîchir le temps d'attente...");
    document.getElementById('estimatedWait').textContent = '15 minutes';
    document.getElementById('peopleAhead').textContent = '5 personnes';
}

document.addEventListener('DOMContentLoaded', function() {
    refreshWaitTime();
});