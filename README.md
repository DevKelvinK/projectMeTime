# Sistema de Reservas e Agendamentos

## 📌 Sobre o Projeto
Este projeto consiste em um **sistema de reservas e agendamentos online** desenvolvido para comércios que necessitam oferecer aos seus clientes uma forma prática e eficiente de marcar horários e realizar reservas.

A plataforma permite o agendamento de serviços, consulta de horários disponíveis, realização de pagamentos, além de um canal de comunicação direto entre cliente e estabelecimento.

Embora esteja sendo desenvolvido inicialmente para um **salão de beleza**, o sistema será projetado de forma **flexível e modular**, podendo ser facilmente adaptado para outros tipos de negócios, como **clínicas, barbearias, estúdios, academias** ou qualquer estabelecimento que trabalhe com agendamentos e reservas.


⚠️ **Status do projeto:** Em desenvolvimento.

---

## 🚀 Funcionalidades
- Agendamento de horários online
- Consulta de horários disponíveis
- Sistema de usuários
  - Usuários finais (clientes)
  - Profissionais
  - Administradores
- Painel administrativo *(em desenvolvimento)*
- Painel de profissionais *(planejado)*
- Integração com pagamentos *(em definição)*
- Canal de contato entre cliente e estabelecimento

---

## 🛠️ Tecnologias Utilizadas
- **Backend:** PHP
- **Frontend:** HTML, JavaScript
- **Estilização:** TailwindCSS + CSS puro
- **Banco de Dados:** MySQL *(planejado)*
- **Arquitetura:** MVC simplificado

---

## 📂 Estrutura do Projeto
Estrutura atual do projeto:
```
MeTime/
├── app/
│   ├── controllers/   # Controllers da aplicação
│   ├── models/        # Models (regras de negócio)
│   └── views/         # Views e templates
│       └── templates/
├── core/              # Funções centrais e helpers
│   └── functions.php    # Funções auxiliares
├── public/            # Arquivos públicos
│   ├── index.php        # Ponto de entrada da aplicação
│   └── assets/
│       ├── CSS/
│       ├── JS/
│       └── images/
├── config.php         # Configurações do banco de dados
└── routes.php         # Definição das rotas da aplicação

```

---

## ⚙️ Como Executar o Projeto

### Pré-requisitos
- PHP 8.0 ou superior
- Servidor web (Apache, Nginx ou similar)
- Banco de dados (MySQL ou compatível)

### Passos para execução

```bash
# Clonar o repositório
git clone https://github.com/DevKelvinK/projectMeTime.git

# Acessar a pasta do projeto
cd projectMeTime
```

1. Configure o projeto em um servidor local (ex: XAMPP, WAMP, Laragon).
2. Aponte o *DocumentRoot* do servidor para a pasta do projeto (ou utilize a pasta `public/`, se configurado).
3. Ajuste as configurações necessárias no arquivo `config.php`.
4. Inicie o servidor web e acesse o projeto pelo navegador.

---

## 📌 Roadmap (Em Desenvolvimento)

### 🏠 Página Inicial

* [ ] Página de acesso a redes sociais e contatos da loja/profissionais
* [ ] Página inicial com apresentação do serviço e acesso ao agendamento

### 🔐 Autenticação e Usuários

* [ ] Sistema de autenticação com níveis de acesso (usuário, profissional e administrador)
* [ ] Recuperação de senha

### 📅 Sistema de Agendamento

* [ ] Escolha do tipo de serviço (ex: unhas, cabelo, massagem)
* [ ] Escolha de subserviços (ex: unhas das mãos, pés, gel, etc.)
* [ ] Seleção de profissional com avaliações e opção "sem preferência"
* [ ] Seleção de data e horário
* [ ] Validação em tempo real de horários disponíveis (JavaScript)
* [ ] Registro de agendamentos no banco de dados (PHP + MySQL)

### 🛠️ Tela e Painel Administrativo

* [ ] Gerenciamento de usuários e profissionais
* [ ] Gerenciamento de serviços e subserviços
* [ ] Visualização geral dos agendamentos

### 👤 Tela e Painel do Usuário

* [ ] Fazer novos agendamentos ou editar agendamentos ja realizados
* [ ] Avaliar ou comentar sobre os serviços recebidos pelos profissionais
* [ ] Visualização de agendamentos futuros e passados
* [ ] Cancelamento de agendamentos
* [ ] Gerenciamento de perfil (avatar, nome e senha)

### 👩‍💼 Tela e Painel do Profissional

* [ ] Login exclusivo para profissionais
* [ ] Visualização de todos os agendamentos
* [ ] Confirmação, cancelamento ou remarcação de horários
* [ ] Gerenciamento de perfil (avatar, nome e senha)
* [ ] Exibição de avaliações (estrelas e comentários opcionais)
* [ ] Lista de serviços oferecidos pelo profissional
* [ ] Calendário com datas e horários disponíveis

### 🔔 Notificações

* [ ] Mensagens de sucesso e erro em tempo real
* [ ] Envio de notificações por e-mail (PHPMailer)
* [ ] Integração futura com WhatsApp *(planejado)*

### 💳 Pagamentos

* [ ] Definição do gateway de pagamento
* [ ] Integração com sistema de pagamentos online

### ⚙️ Expansões Futuras

* [ ] Customização do sistema por tipo de negócio
* [ ] Relatórios e métricas
* [  ] Melhorias de UX/UI

---

## 📄 Licença

Este projeto está licenciado sob a [MIT License](https://opensource.org/license/mit).

---

## 📬 Contato
Caso tenha dúvidas, sugestões ou queira contribuir, entre em contato pelo GitHub ou [LinkedIn](https://www.linkedin.com/in/kelvin-kesley/).

