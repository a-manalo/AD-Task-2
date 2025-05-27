<?php

function updateQuote() {
    $quotes = getGhibliQuotes();
    
    $script = "
    <script>
        const quotes = " . json_encode($quotes) . ";
        
        function updateQuote() {
            const randomIndex = Math.floor(Math.random() * quotes.length);
            const quote = quotes[randomIndex];
            
            document.getElementById('quote-text').textContent = quote.quote;
            document.getElementById('quote-source').textContent = '— ' + quote.movie + ', ' + quote.year;
        }
        
        // Initial quote load
        updateQuote();
        // Update quote every 10 seconds
        setInterval(updateQuote, 10000);
    </script>";
    
    return $script;
}
