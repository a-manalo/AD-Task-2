<?php
function updateClock() {
    return '
    <script>
    function updateClock() {
        const timezone = document.getElementById("timezone-select").value;
        fetch("index.php?timezone=" + timezone)
            .then(response => response.json())
            .then(data => {
                document.getElementById("time").textContent = data.time;
                document.getElementById("period").textContent = data.period;
                const selectedOption = document.getElementById("timezone-select").selectedOptions[0];
                document.getElementById("timezone-info").textContent = selectedOption.text;
            });
    }

    document.getElementById("timezone-select").addEventListener("change", updateClock);
    setInterval(updateClock, 1000);
    window.onload = updateClock;
    </script>
    ';
}