<?php
function displayQuote()
{
    ?>
    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; width: 80%; max-width: 800px;">
        <div id="quote-container" style="color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 2);">
            <p id="quote-text" style="font-size: 2em; margin-bottom: 1rem; font-style: italic;"></p>
            <p id="quote-source" style="font-size: 1.2em; opacity: 1;"></p>
        </div>
        <a href="../pages/worldClock/index.php" 
           style="display: inline-block; margin-top: 2rem; padding: 0.8rem 1.5rem; background-color: black; color: white; text-decoration: none; border-radius: 6px; box-shadow: 0 4px 5px rgba(0, 0, 0, 0.3); transition: all 0.2s ease; transform: translateY(0);" 
           onmouseover="this.style.color='#FCD34D'; this.style.transform='translateY(-5px)'; this.style.boxShadow='0 6px 8px rgba(0, 0, 0, 0.4)';" 
           onmouseout="this.style.color='white'; this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 5px rgba(0, 0, 0, 0.3)';">View World Clock</a>
    </div>
    <?php
}
?> 