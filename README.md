            API - LISTING AND CHANGING USERS
            
            Requirements: Server, Database Manager and text editor installed.
            Suggestion: XAMPP (https://www.apachefriends.org/download.html)
            Suggestion: Sublime-text (https://www.sublimetext.com/download)


            1. download the directories (by clicking on CODE -> DOWLOAD ZIP) into the directory where it will be used.

                        Unzip the directory.
                        Rename the user-api-master directory to user-api 
                        Unzip the file vendor.zip
                       

            2.Configure your database in src/settings.php under //DB Settings:

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

             
            3. Run Server/directory/db.php -> A default database will be created with some users.

            EX: localhost/user-api/db.php
               
               

            4. Run Server/Directory/public/index.html 



            5. Use as you see fit
            
            6. o test the 'Update' User Specific method, use a App Postman extension - 
            https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop
            
            Select the PUT method
            Write the Route: localhost/user-api/public/api/v1/users/update/(The ID you want to update)
            Click on Body
            select (x-www-form-urlencoded)
            Enter the key 'name' - '(Whatever value you want)'. 
            Enter the key 'email' - '(The email you want)'.
            Click Send.



