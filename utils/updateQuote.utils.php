<?php

function updateQuote() {
    global $ghibliQuotes;
    
    $script = "
    <script>
        const quotes = " . json_encode($ghibliQuotes) . ";
        
        function updateQuote() {
            const randomIndex = Math.floor(Math.random() * quotes.length);
            const quote = quotes[randomIndex];
            
            document.getElementById('quote-text').textContent = quote.quote;
            document.getElementById('quote-source').textContent = '— ' + quote.movie + ', ' + quote.year;
        }
        
        updateQuote();
        setInterval(updateQuote, 10000);
    </script>";
    
    return $script;
}
