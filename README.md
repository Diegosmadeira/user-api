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



            4. Execute Servidor/diretório/public/index.html 



            5. Use da forma que melhor lhe aprouver



