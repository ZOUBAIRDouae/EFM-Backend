<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <meta charset="UTF-8">
    <title>Tableau de Bord</title>
    {{-- <style>
        .widget {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 5px;
            font-size: 12px;
            color: #fff;
        }
        /* Exemples de style pour quelques catégories */
        .badge.Aventure { background-color: #e3342f; }
        .badge.Poésie { background-color: #38c172; }
        /* Ajoutez d'autres styles pour d'autres catégories si nécessaire */
    </style> --}}
</head>
<br><br>

<body>
    <div class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Total des Livres</h2>
        @if($errorMessage)
            <div style="color: red;">{{ $errorMessage }}</div>
        @else
            <p style="font-size: 24px;">{{ $totalLivres }}</p>
        @endif
    </div>
    <br><br><br>
    
    <div class="max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <h2  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Les 5 Derniers Livres Ajoutés</h2>
        @if($errorMessage)
            <div style="color: red;">{{ $errorMessage }}</div>
        @elseif($latestLivres->isEmpty())
            <div style="color: red;">Aucun livre à afficher.</div>
        @else
            <ul>
                @foreach($latestLivres as $livre)
                    <li class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        <strong>{{ $livre->titre }}</strong> par {{ $livre->auteur }}
                        <!-- Badge visuel selon la catégorie -->
                        <span class="badge {{ $livre->categorie }}">
                            {{ $livre->categorie }}
                        </span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>