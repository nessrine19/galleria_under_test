<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>our shops</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">our shops</a></li>
                <li><a href="#">about us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <h1>here add search bar</h1>
        </nav>
    </header>

    <div class="container">
        <aside>
            <h3>Format</h3>
        <form>
            <label>
                <input type="radio" name="choice" value="small business">small business
            </label><br>
            <label>
                <input type="radio" name="choice" value="item/product"> item/product
            </label><br>
        </form>
            <h2>filter <h4>by category</h4></h2>
            <hr>
            <form method="POST" action="">
                @csrf
                <ul>
                    <li>
                        <label>
                            <input type="checkbox" name="categories[]" value="cake"> Cake
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="categories[]" value="cups"> Cups
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox" name="categories[]" value="crochet"> Crochet
                        </label>
                    </li>
                </ul>
                <button type="submit">Apply Filter</button>
            </form>
            
        </aside>

        <main>
            <h1>Main Content</h1>
            <p>here the product and the sellers </p>
        </main>
    </div>

    <footer>
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </footer>
</body>
</html>