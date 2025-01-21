<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Treino Exercício</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden p-6">
                <h2 class="font-semibold text-2xl text-gray-800 leading-tight mb-6">
                    Editar Treino Exercício
                </h2>

                <form action="{{ route('treinos_exercicio.update', ['treinos_exercicio' => $treinos_exercicio->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-6">
                        <label for="id_treino" class="block text-sm font-medium text-gray-700 mb-2">
                            Treino:
                        </label>
                        <select name="id_treino" required 
                                class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                            @foreach ($treinos as $treino)
                                <option value="{{ $treino->id }}" {{ $treinos_exercicio->id_treino == $treino->id ? 'selected' : '' }}>
                                    {{ $treino->nome_treino }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="id_exercicio" class="block text-sm font-medium text-gray-700 mb-2">
                            Exercício:
                        </label>
                        <select name="id_exercicio" required 
                                class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition">
                            @foreach ($exercicios as $exercicio)
                                <option value="{{ $exercicio->id }}" {{ $treinos_exercicio->id_exercicio == $exercicio->id ? 'selected' : '' }}>
                                    {{ $exercicio->nome_exercicio }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="ordem" class="block text-sm font-medium text-gray-700 mb-2">
                            Ordem:
                        </label>
                        <input type="number" name="ordem" value="{{ $treinos_exercicio->ordem }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                               min="0" step="1">
                    </div>

                    <div class="mb-6">
                        <label for="series" class="block text-sm font-medium text-gray-700 mb-2">
                            Séries:
                        </label>
                        <input type="number" name="series" value="{{ $treinos_exercicio->series }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                               min="0" step="1">
                    </div>

                    <div class="mb-6">
                        <label for="repeticoes" class="block text-sm font-medium text-gray-700 mb-2">
                            Repetições:
                        </label>
                        <input type="number" name="repeticoes" value="{{ $treinos_exercicio->repeticoes }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                               min="0" step="1">
                    </div>

                    <div class="mb-6">
                        <label for="carga" class="block text-sm font-medium text-gray-700 mb-2">
                            Carga:
                        </label>
                        <input type="number" step="0.01" name="carga" value="{{ $treinos_exercicio->carga }}" required
                               class="w-full border border-gray-300 rounded-lg p-3 text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition"
                               min="0" max="999">
                    </div>

                    <div class="flex items-center justify-between mt-8">
                        <button type="submit" class="px-6 py-3 rounded-md text-white font-semibold bg-indigo-600 hover:bg-indigo-800 transition duration-300">
                            Atualizar Exercício
                        </button>
                        <a href="{{ route('treinos_exercicio.index') }}" 
                           class="px-6 py-3 rounded-md text-white font-semibold bg-gray-800 hover:bg-gray-700 transition duration-300">
                            Voltar para a Lista de Exercícios
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
