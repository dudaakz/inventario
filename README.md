# inventario
#  Inventário de minecraft

# Inventário de Minecraft - Projeto PHP

## 1. Introdução

### a. Qual o objetivo da atividade?

O objetivo desta atividade é desenvolver um sistema de inventário inspirado em jogos como Minecraft e Zelda, permitindo **login, cadastro e gerenciamento de itens** com interface amigável e imagens dos objetos.

---

### i. O que é um inventário em um jogo? Qual a finalidade?

Um **inventário** é uma funcionalidade que armazena e organiza os itens que o jogador coleta. Ele permite visualizar, equipar ou usar os objetos.\
*Exemplo:* Em Minecraft, o jogador coleta pedras, madeiras e minérios, que ficam salvos no inventário.

---

### ii. Que tipos de sistemas utilizam essa funcionalidade?

Além dos jogos, sistemas de controle de estoque, e-commerces e ERPs também usam inventário.\
 *Exemplo:* Amazon e Mercado Livre usam inventário para mostrar e controlar produtos à venda.

---

### iii. Por que essa funcionalidade é importante?

Ela melhora a experiência do usuário, organiza os dados e permite o gerenciamento eficiente de recursos.

---

## 2. Implementação

### a. Front-end

#### i. Ferramentas utilizadas:

- **HTML/CSS**: Estrutura e visual da interface.
- **Bootstrap**: Layout responsivo e moderno.
- **Imagens em PNG**: Itens com fundo transparente para estética aprimorada.
- **Editor**: VS Code – leve, com suporte a PHP e HTML.

#### ii. Layout:

Inspirado em Minecraft:

- Itens apresentados em **tabela com imagens**.
- Tela com fundo personalizado (imagem de Zelda).
- Interface organizada com colunas: Imagem | Nome | Descrição | Quantidade.

---

### b. Back-end

#### i. Ferramentas utilizadas:

- **PHP**: Gerenciamento de sessões, autenticação e controle dos dados.
- **Sessions**: Para manter o usuário logado.
- **Arquivo .txt**: Armazena os itens de cada jogador (sem banco de dados).

---

#### ii. Explicação do código PHP:

#####  `login.php`:

```php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == 'Duda' && $_POST['password'] == 'dudaakz') {
        $_SESSION['usuario'] = 'Duda';
        header('Location: inicio.php');
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
```

- Verifica usuário e senha usando `POST`.
- Inicia sessão e redireciona ao inventário.

---

##### `logout.php`:

```php
session_start();
session_destroy();
header('Location: login.php');
```

- Encerra sessão e volta ao login.

---

##### `inicio.php`:

- Lê o arquivo `inventario.txt` com os itens do jogador.
- Exibe os dados com imagens:

```php
<img src="<?php echo htmlspecialchars($item['imagem']); ?>" class="item-img">
```

- Usa **imagem de fundo personalizada** de Minecraft.
- Mostra o boneco do Minecraft ao lado do título.

---

#####  `cadastro.php`:

- Permite adicionar novos itens com nome, descrição, quantidade e URL da imagem.

---

## 3. Passo a passo de execução

### a. Executando o projeto:

1. Copie os arquivos para o diretório `htdocs` do XAMPP.
2. Execute o Apache no painel XAMPP.
3. Acesse:
   ```
   http://localhost/inventario/login.php
   ```
4. Faça login com:
   - Usuário: `Duda`
   - Senha: `dudaakz`
5. Adicione novos itens com imagens e veja seu inventário.

---

### b. Estrutura de Pastas

```
inventario/
│-- login.php
│-- logout.php
│-- inicio.php
│-- cadastro.php
│-- inventario.txt
│-- styles.css
│
├── assets/
│   ├── imagens/
│   │   ├── diamante.png
│   │   ├── madeira.png
│   │   ├── espada.png
│   └── css/
│       └── styles.css
│
├── includes/
│   └── funcoes.php
│
└── prints/
    ├── login_post.png
    ├── inicio_codigo.png
    ├── sistema_rodando1.png
    ├── sistema_rodando2.png
```

---

## 4. Prints do sistema

Capturas de tela do sistema em funcionamento:*

- Tela de login com autenticação.
- Tela de inventário com imagem
- Sistema completo funcionando com sessões e cadastro de itens.

---

![login](https://github.com/user-attachments/assets/c5a78f78-f5ae-4cb7-a3ac-9d9e7f43e2f7)

![inicio](https://github.com/user-attachments/assets/b6b420d2-c12d-4037-8eac-a347c44d621f)

![cadastro](https://github.com/user-attachments/assets/6b58ac07-bd1c-4178-8658-2e738890f5c2)
