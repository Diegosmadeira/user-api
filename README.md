            API -  LISTAGEM E ALTERAÇÃO DE USUÁRIOS
            
            Requisitos: Servidor, Gerenciador de  banco de dados e editor de texto instalados.
            Sugestão: XAMPP (https://www.apachefriends.org/download.html)
            Sugestão: Sublime-text (https://www.sublimetext.com/download)


            1. faça o dowload dos diretórios (clicando em CODE -> DOWLOAD ZIP) para o diretório onde vai ser usado.

            
               
               
        

            2.Configure o seu banco de dados em src/settings.php em //DB Settings:

            'db'=> [

                        'driver' => '(preencha com o gerenciador de banco de dados. EX: mysql)',
                        'host' => '(preencha com seu host)',
                        'database' => '(nome do banco de dados)',
                        'username' => 'root',
                        'password' => '',
                        'charset' => 'utf8',
                        'collation' => 'utf8_unicode_ci',
                        'prefix' => '',

                    ]

             
            3. Execute Servidor/diretório/db.php -> Será Criado um banco de dados default com alguns usuarios.

            EX: localhost/user-api/db.php

            4.Em caso de Erro (autoload não identificado)
            
               Click em 'This Pc' com o botão direito do mouse
               clique em Propriedades
               depois vá em 'definições avançadas do sistema'
               entre na Aba 'Avaçadas'
               Clique em 'varáveis de ambiente'
               clique 2x na variável path
               cole o caminho C:\Xampp\php
               OK.
               
               Abra o CMD do Windows
               
               Crie um novo ambiente de desenvolvimento
               Digite: cd (insira o caminho da pasta de desenvolvimento) 
               Press: Enter
               Digite: php -s localhost:8080
               Press: Enter
               
               

            5. Execute Servidor/diretório/public/index.html 



            6. Use da forma que melhor lhe aprouver
            
            7. Para testar o método Update Specific User, use a App Postman extension - 
            https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop
            
            Selecinoe o método put
            Escreva a Rota: localhost/user-api/public/api/v1/users/update/(O ID que se deseja atualizar)
            Clique em Body
            Insira a key 'nome' - '(O valor que quiser)' 
            Insira a key 'email' - '(O email que quiser)'
            Clique em Send.



