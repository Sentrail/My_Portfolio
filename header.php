<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | ' : ''; ?>PixelCraft Portfolio</title>
    <meta name="description" content="Frontend Developer | Aspiring Fullstack Engineer">
    <link rel="icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    
</head>
<body>
    <header class="nav fixed">
        <nav class="container flex justify-between items-center">
            <div class="logo bold">Yusuf T. Israel</div>
            <ul class="menu flex hidden md:flex">
                <li><a href="#hero" class="smooth">Home</a></li>
                <li><a href="#about" class="smooth">About</a></li>
                <li><a href="#projects" class="smooth">Projects</a></li>
                <li><a href="#skills" class="smooth">Skills</a></li>
                <li><a href="#contact" class="smooth">Contact</a></li>
            </ul>
            <div class="hamburger md:hidden">☰</div>
        </nav>
    </header>