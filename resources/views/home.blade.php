<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/prism/prism.css">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>
<body>
    <header>
        <nav class="navbar bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/super.jpeg" height="60px">
                </a>
                <span class="flex-row-reverse">Prova - Yuri Ferreira</span>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <h2 class="text-center">Questão 1</h2>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <p>
                                Crie um código com as seguintes especificações:
                                <ul>
                                    <li>
                                        Realizar validações para cada input do form (quantas e quais validações fica a seu critério)
                                    </li>
                                    <li>
                                        Crie um BD para armazenar os dados
                                    </li>
                                    <li>
                                        Crie um método para inserir os dados no BD
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCadastro">
                                Cadastrar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <p>
                                Crie um código com as seguintes especificações:
                                <ul>
                                    <li>
                                        Crie um método para consultar os dados do BD
                                    </li>
                                </ul>
                            </p>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalConsultar">
                                Consultar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <h2 class="text-center">Questão 2</h2>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <pre>
                                    <code class="language-php">
//Crie um código que realize as seguintes instruções:
//1) Crie um array
$meu_array = array();

//2) Popule este array com 7 números
array_push($meu_array, 1,3,2,8,4,7,3);

//3) Imprima o número da posição 3 do array
echo($meu_array[3]);

//4) Crie uma variável com todas as posições do array no formato de string separado por vírgula
$formato_string = implode(',',array_keys($meu_array))

//5) Crie um novo array a partir da variável no formato de string que foi criada e destrua o array anterior
$novo_array = array_map('intval', explode(',', $formato_string));
unset($meu_array);

//6) Crie uma condição para verificar se existe o valor 14 no array
echo(in_array(14, $novo_array) ? 'Existe o valor' : 'Não existe');

//7) Faça uma busca em cada posição. Se o número da posição atual for menor que o
//da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta posição
for ($i=0 ; $i < count($novo_array); $i++) {
	if ($i>0 && $novo_array[$i] < $novo_array[$i-1]) {
		unset($novo_array[$i]);
		$novo_array = array_values($novo_array);
		$i = $i-1;
	}
}

//8) Remova a última posição deste array
array_pop($novo_array);

//9) Conte quantos elementos tem neste array
count($novo_array);

//10) Inverta as posições deste array
$novo_array = array_reverse($novo_array);

                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section>
            <h2 class="text-center">Questão 3</h2>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header">
                            Usuário
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-fluid">
                                        <table class="table" id="tabela-pesquisa">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>CPF</th>
                                                    <th>Nome</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($usuarios_terceira_questao as $usuario)
                                                <tr>
                                                    <td>{{ $usuario['id'] }}</td>
                                                    <td>{{ $usuario['cpf'] }}</td>
                                                    <td>{{ $usuario['nome'] }}</td>
                                                </tr>
                                                @endforeach    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header">
                            Info
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-fluid">
                                        <table class="table" id="tabela-pesquisa">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>CPF</th>
                                                    <th>Genero</th>
                                                    <th>Ano Nascimento</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($infos_terceira_questao as $info)
                                                <tr>
                                                    <td>{{ $info['id'] }}</td>
                                                    <td>{{ $info['cpf'] }}</td>
                                                    <td>{{ $info['genero'] }}</td>
                                                    <td>{{ $info['ano_nascimento'] }}</td>
                                                </tr>
                                                @endforeach    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-header">
                            Resultado
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-fluid">
                                        <table class="table" id="tabela-pesquisa">
                                            <thead>
                                                <tr>
                                                    <th>Usuário</th>
                                                    <th>Maior 50 anos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($resultados_terceira_questao as $resultado)
                                                <tr>
                                                    <td>{{ $resultado['usuario'] }}</td>
                                                    <td>{{ $resultado['maior_50_anos'] }}</td>
                                                </tr>
                                                @endforeach    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" id="form-cadastro">
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="name">Nome completo:</label><span class="text-danger">*</span>
                            <input class="form-control" type="text" id="name" name="name" autocomplete="off">
                            <small class="text-danger erro" style="display: none" id="erro_name"></small>
                        </div>
                        <div  class="mb-3">
                            <label for="userName">Nome de login:</label><span class="text-danger">*</span>
                            <input class="form-control" type="text" id="userName" name="userName"  autocomplete="off">
                            <small class="text-danger erro" style="display: none" id="erro_userName"></small>
                        </div>
                        <div  class="mb-3">
                            <label for="zipCode">CEP</label><span class="text-danger">*</span>
                            <input class="form-control" type="text" id="zipCode" name="zipCode"  autocomplete="off">
                            <small class="text-danger erro" style="display: none" id="erro_zipCode"></small>
                        </div>
                        <div  class="mb-3">
                            <label for="email">Email:</label><span class="text-danger">*</span>
                            <input class="form-control" type="text" id="email" name="email" autocomplete="off">
                            <small class="text-danger erro" style="display: none" id="erro_email"></small>
                        </div>
                        <div  class="mb-3">
                            <label for="password">Senha:</label><span class="text-danger">*</span>
                            <input class="form-control" type="password" id="password" name="password">
                            <small class="text-muted">8 caracteres mínimo, contendo pelo menos 1 letra e 1 número</small><br>
                            <small class="text-danger erro" style="display: none" id="erro_password"></small>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fecharModal" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" id="cadastrar" >Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalConsultar" tabindex="-1" aria-labelledby="modalConsultarLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalConsultarTitle">Consultar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post">
                    <div class="modal-body">
                        <div class="row d-flex align-items-end">
                            <div class="col-md-8">
                                <label>Termo de Busca</label>
                                <input class="form-control" type="text" id="termo" autocomplete="off" required/>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-primary" id="consultar" >Filtrar</button>
                                <button type="button" class="btn btn-danger" id="limpar" >Limpar</button>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="table-fluid">
                                    <table class="table" id="tabela-pesquisa">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Nome de Login</th>
                                                <th>Email</th>
                                                <th>CEP</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fecharModal" data-bs-dismiss="modal">Fechar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <script src="/prism/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>

        $('.fecharModal').on('click', function() {
            $(this).parents('form:first').trigger("reset");
        });

        const exampleModal = document.getElementById('modalConsultar')
        exampleModal.addEventListener('show.bs.modal', event => {
            buscar();
        })

        $('#cadastrar').on('click', function() {
            $(this).attr('disabled', true);
            $('.erro').hide();
            $.ajax({
                type: 'POST',
                url: "{{route('primeira-questao.store')}}",
                data: $('#form-cadastro').serialize(),
                success: (response) => {
                    if (response.message.status) {
                        toastr.success(response.message.text, "Sucesso!");
                        $('#form-cadastro').trigger("reset");
                        $('#modalCadastro').modal('hide');
                    }
                },
                error: (error) => {
                    $(this).attr('disabled', false);
                    if (error.status == 422) {
                        let erros = error.responseJSON.errors
                        let chaves = Object.keys(erros);
                        chaves.forEach((chave) => {
                            $('#erro_' + chave).text(erros[chave][0]).show();
                        });
                        return ;
                    }
                    if (error.responseJSON.message?.status == false) {
                        toastr.error(error.responseJSON.message.text, "Ops!");
                    }
                }
            })
        })
        $('#consultar').on('click', function() {
           buscar();
        })
        $('#limpar').on('click', function() {
            $('#termo').val(null);
            buscar();
        })

        function buscar() {
            $.ajax({
                type: 'POST',
                url: "{{route('primeira-questao.search')}}",
                data: {
                    termo: $('#termo').val(),
                    _token: "{{csrf_token()}}"
                },
                success: (response) => {
                    $('#tabela-pesquisa tbody').empty();
                    
                    if (response.data.length == 0) {
                        $('#tabela-pesquisa tbody').append(`<tr><td class="text-center" colspan="4">Sem Registros</td></tr>`);

                    }
                    response.data.forEach((linha) => {
                        console.log(linha);
                        $('#tabela-pesquisa tbody').append(`<tr><td>${linha.name}</td><td>${linha.username}</td><td>${linha.email}</td><td>${linha.zipcode}</td></tr>`);
                    });
                },
                error: (error) => {
                    if (error.responseJSON.message?.status == false) {
                        toastr.error(error.responseJSON.message.text, "Ops!");
                    }
                }
            })
        }
    </script>
</body>
</html>