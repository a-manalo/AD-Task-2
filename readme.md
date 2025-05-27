<a name="readme-top">

<br/>

<br />
<div align="center">
  <a href="https://github.com/a-manalo/">
  <!-- TODO: If you want to add logo or banner you can add it here -->
  </a>
<!-- TODO: Change Title to the name of the title of your Project -->
  <h3 align="center">World Digital Clock</h3>
</div>
<!-- TODO: Make a short description -->
<div align="center">
  A Ghibli-themed Digital Clock Project.
</div>

<br />

<!-- TODO: Change the zyx-0314 into your github username  -->
<!-- TODO: Change the WD-Template-Project into the same name of your folder -->

---

<br />
<br />

<!-- TODO: If you want to add more layers for your readme -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rule,-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

## Overview

<!-- TODO: To be changed -->
<!-- The following are just sample -->

This project is a simple website with 2 pages using the languages, PHP, HTML, CSS, and Javascript, designed with Ghibli theme. It has a Home Page that welcomes the user with ghibli quotes and a World Clock Page that displays a digital clock with different timezones. The project incorporates the use of arrays, dictionaries, functions, and fragmentation.

### Key Components

<!-- TODO: List of Key Components -->
<!-- The following are just sample -->

- Dynamic Display of Ghibli Quotes
- Digital Clock with Timezone

### Technology

<!-- TODO: List of Technology Used -->
#### Language
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Framework/Library
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwindcss&logoColor=white)

## Rules, Practices and Principles

<!-- Do not Change this -->

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.
3. Add `.component` to the `.php` files if they are components code; example: `footer.component.php`.
4. Add `.util` to the `.php` files if they are utility codes; example: `account.util.php`.
5. Place Files in their respective folders.
6. Different file naming Cases
   | Naming Case | Type of code         | Example                           |
   | ----------- | -------------------- | --------------------------------- |
   | Pascal      | Utility              | Accoun.util.php                   |
   | Camel       | Components and Pages | index.php or footer.component.php |
8. Renaming of Pages folder names are a must, and relates to what it is doing or data it holding.
9. Use proper label in your github commits: `feat`, `fix`, `refactor` and `docs`
10. File Structure to follow below.

```
AD-Task-2
└─ assets
|   └─ css
|   |   └─ name.css
|   └─ img
|   |   └─ name.jpeg/.jpg/.webp/.png
|   └─ js
|   |   └─ name.css
|   └─ vid
|   |   └─ ghibliNature.mp4
└─ components
|   └─ componentGroup
|      └─ displayDigitalClock.component.php
|      └─ displayQuote.component.php
|   └─ templates
|      └─ foot.component.php
|      └─ head.component.php
|      └─ nav.component.php
└─ handlers
|   └─ name.handler.php
└─ layout
|   └─ name.layout.php
└─ pages
|  └─ worldClock
|     └─ assets
|     |  └─ css
|     |  |  └─ name.css
|     |  └─ img
|     |  |  └─ ghiblimovies.jpg
|     |  └─ js
|     |     └─ name.js
|     └─ index.php
└─ staticData
|  └─ quotes.staticData.php
|  └─ timezones.staticData.php
└─ utils
|   └─ HtmlEscape.utils.php
|   └─ UpdateQuote.utils.php
|   └─ GetTime.utils.php
|   └─ UpdateClock.utils.php
└─ vendor
└─ .gitignore
└─ bootstrap.php
└─ composer.json
└─ composer.lock
└─ index.php
└─ readme.md
└─ router.php
```
> The following should be renamed: name.css, name.js, name.jpeg/.jpg/.webp/.png, name.component.php(but not the part of the `component.php`), Name.utils.php(but not the part of the `utils.php`)

## Resources

<!-- TODO: Add References -->

| Title                   | Purpose                                       | Link                                        |
| ----------------------- | --------------------------------------------- | ------------------------------------------- |
| Ghibli Cinematography   | Used as background video for home page.       | https://www.youtube.com/watch?v=i63STOtAL2g |
| Studio Ghibli Wallpaper | Used as background image for worldClock page. | https://wallpapers.com/studio-ghibli        |
