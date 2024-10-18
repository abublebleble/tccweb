<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo à Home</h1>

        <div>
            <h2>Meus Treinos</h2>
            <a href="<?php echo e(route('treinos.create')); ?>" class="btn btn-primary">Criar Novo Treino</a>
            <!-- Alterado para redirecionar para treinos_exercicios.index -->
            <a href="<?php echo e(route('treinos_exercicio.index')); ?>" class="btn btn-primary">Ver Meus Treinos</a>
        </div>

        <div style="margin-top: 50px;">
            <h2>Administração</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Ação</th>
                        <th>Ir Para</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gerenciar Grupos Musculares</td>
                        <td><a href="<?php echo e(route('grupos_musculares.index')); ?>" class="btn btn-secondary">Grupos Musculares</a></td>
                    </tr>
                    <tr>
                        <td>Gerenciar Exercícios</td>
                        <td><a href="<?php echo e(route('exercicios.index')); ?>" class="btn btn-secondary">Exercícios</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\César\Desktop\tcc1-main\resources\views/home.blade.php ENDPATH**/ ?>