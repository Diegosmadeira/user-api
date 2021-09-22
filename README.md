            API -  LISTAGEM E ALTERAÇÃO DE USUÁRIOS
            
            Requisitos: Servidor, Gerenciador de  banco de dados e editor de texto instalados.
            Sugestão: XAMPP (https://www.apachefriends.org/download.html)
            Sugestão: Sublime-text (https://www.sublimetext.com/download)


            1. faça o dowload dos diretórios (clicando em CODE -> DOWLOAD ZIP) para o diretório onde vai ser usado.

                        Descompactar o diretório.
                        Renomear o diretório User-api-master para user-api 
                        Descompactar o arquivo vendor.zip
                       

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
               
               

            4. Execute Servidor/diretório/public/index.html 



            5. Use da forma que melhor lhe aprouver
            
            6. Para testar o método Update Specific User, use a App Postman extension - 
            https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop
            
            Selecinoe o método put
            Escreva a Rota: localhost/user-api/public/api/v1/users/update/(O ID que se deseja atualizar)
            Clique em Body
            Insira a key 'nome' - '(O valor que quiser)' 
            Insira a key 'email' - '(O email que quiser)'
            Clique em Send.



