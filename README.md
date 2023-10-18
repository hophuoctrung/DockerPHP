# DockerPHP

A wamp/mamp/xampp alternative... With Docker

The provided instructions guide you on how to use DockerPHP, a Docker-based alternative to WAMP/MAMP/XAMPP for PHP development. Here's a breakdown of the steps:

## How Use This ? 😄

Before you begin, make sure you have Docker installed and running on your machine.

1. Clone the DockerPHP repository:

   ```bash
   git clone https://github.com/hophuoctrung/DockerPHP.git
   ```

1. Navigate to the cloned repository:

   ```bash
   cd DockerPHP
   ```

1. Start the Docker containers using Docker Compose:

   ```bash
   docker-compose up -d
   ```

1. Open your browser and access the following URLs:

   - [http://127.0.0.1](http://127.0.0.1): This is the homepage of your DockerPHP application.
   - [http://localhost:8080](http://localhost:8080): This is the URL for accessing PHPMyAdmin, a web-based database management tool.

1. Start coding your PHP application:

   - Modify your code in the ***./app*** folder, which serves as the workspace for your project.
   - Customize the ***index.php*** file located in ***./app/webroot/index.php***.

Remember to have fun and enjoy coding with DockerPHP! 😊

## Additional notes:

- The images are currently set to 'latest' because I'm lazy to update them frequently 😄😄😄. Please change them to specific versions that align with your project requirements.
- The workspace for your project is located in the ***./app*** folder, where your code will be stored.
- The ***./app/webroot*** folder contains static resources that will be accessible to the public.
- ```SQL
    MYSQL_ROOT_USER: "root"
    MYSQL_ROOT_PASSWORD: "hophuoctrung"
    MYSQL_USER: "trungHo"
    MYSQL_PASSWORD: "trungHo"
    MYSQL_DATABASE: "docker_php"
  ```
  The provided database information includes the root user, root password, database name, and other details. You can modify these settings in the ***docker-compose.yml*** file. If you change MYSQL_ROOT_PASSWORD, remember to update the phpmyadmin service in ***docker-compose.yml***.
- When connecting to the database, use ***mysql*** as the hostname. For example, in PHP, you can connect to the database using PDO as shown in the code snippet provided.
  ```PHP
  $pdo = new PDO(
      'mysql:dbname=docker_php;host=mysql',
      'trungHo',
      'trungHo',
      [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
  ```
- For CakePHP, please replace `nginx.conf` with `cakephp.nginx.conf` as attached. For other frameworks, please update Nginx according to their instructions. 
- You may need to grant permissions to `bin/bake` in the PHP container to use the Bake tool directly. Use the command `chmod +x bin/cake` to grant execute permissions to `bin/cake`.
   ```bash
      chmod +x bin/cake
   ```
- Additionally, you can also use PHP Composer within the PHP container.

______________________________________________________________________

> I use it for developing both plain PHP code and CakePHP applications. However, it is advisable to exercise caution when deploying it in a production environment. Please feel free to contribute if you have any ideas or suggestions. 
> HappyCoding! 😄 
> **TrungHo**