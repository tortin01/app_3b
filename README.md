
## SITE DE GERENCIAS CONTABEIS
![Logo](gerenciamento-de-documentos-contabeis.png)


- ## linguagens utilizadas:
- MySql
- php
- JavaScrip
- html
- css
- Laravel
- ## Instalação
## Instalação do framework

1: curl -s "https://laravel.build/gestao?with=mysql&quot; | bash

- ## Instalação do filament
2: composer require filament/filament:"^3.2" -W

3: php artisan filament:install --panels

4: php artisan migrate

## Gerar chave ssh

1. Para a criação de chaves ssh, deve-se utilizar o comando keygen
link de apoio: https://git-scm.com/book/pt-br/v2/Git-no-servidor-Gerando-Sua-Chave-P%C3%BAblica-SSH

2. Utilizar o comando cat, para visualizar a chave publica e adiciona-la no github
ver link de apoio acima

3. Adicionar a chave ssh no github
link de apoio: https://docs.github.com/pt/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account

4: Inicializar o git, dentro da pasta da aplicação
comando: git init

5: adicionar os arquivos para serem rastreados pelo git
comando git add .

6: Configurar o usuario do git
git config --global user.email "you@example.com"

git config --global user.name "Your Name"

7: Comitar os arquivos
git commit -m "Commit Inicial"

8: Adicionar o repositorio remoto
git remote <nome ssh do seu repositorio>

9: Enviar os arquivos ao github
git push --set-upstream origin master

## Passo a Passo do Banco de dados

https://chatgpt.com/share/67bf04ef-7064-800f-9968-492bcf850866

## Implementar o layout das telas de autenticação

Use o site CodePen, utilize a linguagem html,css e JavaScript

## Implementar a comunicação entre front-end e back-end do projeto

Deverão construir o arquivo routes.php e os respectivos
controllers para login, logout, registro de nova contas, atualização de
senha


Exemplo do Arquivo de Rotas
https://chatgpt.com/canvas/shared/67e52f3dba948191977ad166d170ed62

Comando para executar o caminho de rotas
sudo ./vendor/bin/sail artisan install:api
sudo ./vendor/bin/sail artisan make:controller AuthController




- ## Funcionalidades

- Painel Financeiro Personalizado
Exibe gráficos e relatórios com dados como receitas, despesas, lucros e tributos em tempo real. Pode incluir filtros por período, categoria, ou cliente.

- Emissão e Gestão de Notas Fiscais
Permite gerar, armazenar e consultar notas fiscais eletrônicas (NF-e, NFS-e), com integração à Sefaz ou prefeitura local.

- Envio e Armazenamento de Documentos
Área para upload e organização de documentos como DARFs, contratos, recibos e comprovantes, com controle de versão e histórico.

- Gestão de Obrigações Fiscais e Contábeis
Alertas e acompanhamento de obrigações mensais, trimestrais e anuais (ex: DCTF, SPED, DIRF), com status de entrega e vencimentos.

- Atendimento e Comunicação com o Contador
Canal de suporte via chat, mensagens ou chamados para facilitar o contato com o escritório contábil, com histórico das conversas.


- ## Aprendizados
O desenvolvimento desse site me trouxe grandes aprendizados que levarei pra vida ,no começo nos não sabiamos nem como acessava um Terminal nem por onde eu começava diferentemente de hoje que nos sabemos por onde começar os passos que tenho que seguir e sem contar que foi uma experiencia muito legal e que ajudou a desenvolver o trabalho em grupo.

- ## Autores

- [@tortin01](https://www.github.com/octokatherine)
- [@thaiss123](https://www.github.com/octokatherine)
- [@](https://www.github.com/octokatherine)

## Contribuindo

Contribuições são sempre bem-vindas!



