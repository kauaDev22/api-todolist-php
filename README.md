Para executar um projeto PHP + MySQL, siga os seguintes passos:

1. **Instale o XAMPP**: Certifique-se de que o XAMPP está instalado e em execução no seu sistema. O XAMPP inclui o Apache (servidor web) e o MySQL (banco de dados).

2. **Coloque o projeto na pasta correta**: Coloque o seu projeto na pasta `htdocs` do XAMPP. No seu caso, o caminho é `/opt/lampp/htdocs/api-todolist/`.

3. **Configure o banco de dados**:
    - Abra o phpMyAdmin acessando `http://localhost/phpmyadmin/` no seu navegador.
    - Crie um novo banco de dados para o seu projeto.
    - Importe o arquivo SQL do seu projeto (se houver) para criar as tabelas necessárias.

4. **Configure o arquivo de conexão com o banco de dados**: Certifique-se de que o seu projeto possui um arquivo de configuração para a conexão com o banco de dados (geralmente `config.php` ou similar). Atualize as credenciais de acesso ao banco de dados conforme necessário.

    Exemplo de configuração de conexão:
    ```php
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "nome_do_banco_de_dados";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
         die("Conexão falhou: " . $conn->connect_error);
    }
    ?>
    ```

5. **Inicie o servidor Apache e MySQL**: Abra o painel de controle do XAMPP e inicie os serviços Apache e MySQL.

6. **Acesse o projeto no navegador**: Abra o navegador e acesse `http://localhost/api-todolist/` para ver o seu projeto em execução.

Certifique-se de que todas as dependências do projeto estão instaladas e configuradas corretamente. Se o projeto utiliza Composer, execute `composer install` para instalar as dependências.
