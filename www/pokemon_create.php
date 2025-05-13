<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create card</title>
</head>

<body>
    <div class="container">
        <div class="text">
            <h1>Toevoegen pokemon</h1>
            <p>Gooi ze erin</p>
            <hr>
        </div>
        <form action="pokemon_create_process.php" method="post">
            <div class="forms">
                <div>
                    <label for="name">Naam</label><br>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <label for="type">Type</label><br>
                    <input type="text" name="type" id="type" required>
                </div>
                <div>
                    <label for="image">Image</label><br>
                    <input type="text" name="image" id="image" required>
                </div>
                <div>
                    <label for="evolution_stage">evolution_stage</label><br>
                    <input type="text" name="evolution_stage" id="evolution_stage">
                </div>
                <div>
                    <label for="height">height</label><br>
                    <input type="text" name="height" id="height">
                </div>
                <div>
                    <label for="weight">weight</label><br>
                    <input type="text" name="weight" id="weight">
                </div>
                <div>
                    <label for="abilities">abilities</label><br>
                    <input type="text" name="abilities" id="abilities">
                </div>
                <div>
                    <label for="hp">hp</label><br>
                    <input type="text" name="hp" id="hp">
                </div>
                <div>
                    <label for="attack">attack</label><br>
                    <input type="text" name="attack" id="attack">
                </div>
                <div>
                    <label for="defense">defense</label><br>
                    <input type="text" name="defense" id="defense">
                </div>
                <div>
                    <label for="description">description</label><br>
                    <input type="text" name="description" id="description">
                </div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>

</html>