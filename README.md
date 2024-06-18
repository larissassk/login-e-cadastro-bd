# Sistema de Cadastro e Login em PHP com MySQL

Este é um projeto simples de cadastro e login em PHP utilizando MySQL como banco de dados. O sistema permite que usuários se cadastrem, façam login e sejam redirecionados para uma página inicial após o login.

## Banco de Dados

O sistema utiliza o MySQL como banco de dados para armazenar informações de usuários. Foi criado um banco de dados chamado `bd_roubbie` e uma tabela `usuarios` com os seguintes campos:

- `id`: Chave primária auto-incrementável.
- `full_name`: Nome completo do usuário.
- `email`: Email único do usuário.
- `phone_number`: Número de telefone do usuário.
- `password`: Senha criptografada do usuário.

## Como Rodar o Projeto

### Pré-requisitos

1. **Ambiente de Desenvolvimento Local**:
   - Utilize um servidor web local configurado (como XAMP).
   - Verifique se o PHP está instalado e configurado corretamente no seu ambiente.

2. **Banco de Dados MySQL**:
   - Importe ou crie a tabela `usuarios` no seu banco de dados MySQL.
   - As credenciais do banco de dados estão configuradas no arquivo `db.php`.

### Passos para Executar

1. **Download e Configuração**:
   - Clone ou baixe o repositório para o diretório raiz do seu servidor web local.

2. **Configuração do Banco de Dados**:
   - Crie um banco de dados MySQL com o nome `bd_roubbie`.
   - Execute o script SQL fornecido (`script_sql.sql`) para criar a tabela `usuarios`.

3. **Configuração do Arquivo `db.php`**:
   - Abra o arquivo `db.php` e configure as variáveis `$servername`, `$username`, `$password` e `$dbname` de acordo com as configurações do seu ambiente local MySQL.

4. **Acesso ao Sistema**:
   - Abra seu navegador web e acesse `http://localhost/caminho-para-o-repositorio/register.php` para acessar a página de cadastro.
   - Preencha o formulário de cadastro com nome, email, número de telefone e senha.
   - Após o cadastro bem-sucedido, você será redirecionado para a página de login.



