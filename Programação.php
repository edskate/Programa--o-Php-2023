<!DOCTYPE html>
<html>
<head>
    <title>Programming Languages List</title>
</head>
<body>
    <h1>List of Programming Languages</h1>
    
    <?php
    // Define an array of programming languages
    $programmingLanguages = array(
        "Python",
        "Java",
        "JavaScript",
        "C++",
        "Ruby",
        "PHP",
        "Swift",
        "Go",
        "Rust",
        "Kotlin",
        "Google"
    );
    ?>

    <ul>
        <?php
        // Loop through the programmingLanguages array and create list items
        foreach ($programmingLanguages as $language) {
            echo "<li>$language</li>";
        }
        ?>
    </ul>
</body>
</html>