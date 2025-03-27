<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="{{ route('livres.store')}}" method="POST"  class="max-w-sm mx-auto">
        @csrf
        <div class="mb-5">
            
            Titre : <input type="text" name="titre" placeholder="Titre" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ><br><br>
            @error('titre')
            <span>{{ $message }}</span>
            @enderror

            
            Auteur : <input type="text" name="auteur" placeholder="Auteur" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><br><br>
            @error('auteur')
            <span>{{ $message }}</span>
            @enderror

            
            Nombre Pages : <input type="number" name="nombre_pages" placeholder="Nombre Pages" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"><br><br>
            @error('nombre_pages')
            <span>{{ $message }}</span>
            @enderror

            
            Categorie <input type="text" name="categorie" placeholder="Categorie" class="block w-full p-4 text-gray-500 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> <br><br>
            @error('categorie')
            <span>{{ $message }}</span>
            @enderror

            <button type="submit" value="Ajouter" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Ajouter </button>
        </div>
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <input>{{ $error }}</input>
            @endforeach
        </ul>
    </div>
    @endif
</body>
</html>



