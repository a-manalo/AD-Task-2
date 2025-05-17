<?php
function navHeader()
{
    ?>
    <header>
        <nav class="bg-black/80 backdrop-blur-sm w-full">
            <div class="flex justify-center items-center py-6">
                <ul class="flex space-x-8">
                    <li>
                        <a href="./index.php" class="text-white font-bold hover:text-yellow-300 transition-colors duration-200">Home</a>
                    </li>
                    <li>
                        <a href="./pages/worldTime/index.php" class="text-white font-bold hover:text-yellow-300 transition-colors duration-200">World Time</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?php
}
?>