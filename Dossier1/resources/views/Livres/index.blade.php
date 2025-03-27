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
    <button><a href="{{ route('livres.create') }}">Ajouter un livre</a></button>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Titre</th>
                <th scope="col" class="px-6 py-3">Auteur</th>
                <th scope="col" class="px-6 py-3">Nombre Pages</th>
                <th scope="col" class="px-6 py-3">Categorie</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($livres as $livre)
            <tr>
                
                <td class="px-6 py-4">{{ $livre->titre }}</td>
                <td class="px-6 py-4">{{ $livre->auteur }}</td>
                <td class="px-6 py-4">{{ $livre->nombre_pages }}</td>
                <td class="px-6 py-4">{{ $livre->categorie }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $livres->links() }}
</body>
</html>