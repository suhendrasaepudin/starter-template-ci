<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?? 'My App' ?></title>
</head>

<body>

    <header>
        <h1>My App</h1>
        <nav>Menu di sini</nav>
    </header>

    <main>
        <?= $content ?? '' ?>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> My App</p>
    </footer>

</body>

</html>