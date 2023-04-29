<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>it-just-works.com</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-full h-screen flex justify-center items-center bg-cyan-500">
        <div class="text-3xl">
            <span class="text-rose-500">Hello</span> <span class="text-amber-300"><?= $person->name ?></span> 👋
        </div>
    </div>
</body>

</html>