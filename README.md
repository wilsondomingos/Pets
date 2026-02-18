# 🐾 Pets – Gestão de Venda e Criação de Animais

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-green.svg)

> **Descrição:** Sistema web completo para controlo de venda, criação e gestão de animais de estimação. Ideal para pet shops, criadores profissionais e clínicas veterinárias.

![Demo do Sistema](./public/assets/demo-pets.png)
*(Dica: Adiciona um print do dashboard ou da lista de animais)*

---

## 📌 Sobre o Projecto

O **Pets** foi desenvolvido para digitalizar e profissionalizar a gestão de criadores e lojas de animais. O sistema permite controlar todo o ciclo de vida do animal, desde o nascimento até à venda, incluindo histórico de saúde e pedigree.

**Público-alvo:**
- 🐶 Criadores de Cães e Gatos
- 🐱 Pet Shops e Lojas de Animais
- 🏥 Clínicas Veterinárias
- 🏠 Canis e Gatil

**Objectivo:** Centralizar informações genéticas, de saúde e comerciais dos animais em uma plataforma segura e acessível.

---

## 🚀 Funcionalidades Principais

| Módulo | Funcionalidades |
| :--- | :--- |
| **🐕 Animais** | Cadastro de animais, raça, cor, data de nascimento, sexo. |
| **🧬 Pedigree** | Registro de pais e ancestrais (Árvore genealógica). |
| **💉 Saúde** | Controlo de vacinas, vermifugação e histórico veterinário. |
| **💰 Vendas** | Gestão de vendas, contratos de compra e venda, recibos. |
| **👥 Clientes** | Base de dados de compradores e interessados. |
| **📊 Financeiro** | Controlo de entradas, saídas e lucros por animal. |

---

## 🏗️ Arquitectura e Tecnologias

O sistema segue o padrão **MVC (Model-View-Controller)** do Laravel, garantindo segurança e escalabilidade.

- **Backend:** PHP 8+ | Laravel 9/10/11
- **Base de Dados:** MySQL 8.0
- **Frontend:** Blade Templates | Bootstrap 5 / Tailwind CSS
- **Autenticação:** Laravel Breeze / UI
- **PDF:** DomPDF (para contratos e pedigrees)
- **Imagens:** Armazenamento local ou Cloud (S3)

### 📊 Principais Entidades (Base de Dados)

- **Animals:** Dados principais do animal.
- **Breeds:** Raças cadastradas.
- **Owners/Customers:** Proprietários e clientes.
- **Sales:** Registo de vendas e transações.
- **HealthRecords:** Histórico de vacinas e consultas.
- **Pedigree:** Relações de parentesco (Pai, Mãe).

---

## 📦 Instalação e Configuração

Siga os passos abaixo para rodar o projecto localmente:

### 1. Pré-requisitos
- PHP >= 8.0
- Composer instalado
- MySQL ou MariaDB
- Servidor Web (Apache/Nginx) ou `php artisan serve`

### 2. Passos de Instalação

```bash
# 1. Clonar o repositório
git clone https://github.com/wilsonmateus/pets-gestao.git

# 2. Entrar na pasta
cd pets-gestao

# 3. Instalar dependências do PHP
composer install

# 4. Instalar dependências do Frontend (se houver)
npm install && npm run dev

# 5. Configurar variáveis de ambiente
cp .env.example .env
# (Edite o ficheiro .env com os dados da sua base de dados)

# 6. Gerar chave da aplicação
php artisan key:generate

# 7. Rodar migrations e seeders
php artisan migrate --seed

# 8. Criar link simbólico para imagens
php artisan storage:link

# 9. Iniciar o servidor
php artisan serve
