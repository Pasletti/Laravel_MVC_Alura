<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Requisitos
PHP 8.1
php -m

## Update PHP
dpkg -l | grep php | tee packages.txt
sudo apt-get purge php7.*
sudo apt-get autoclean
sudo apt-get autoremove
sudo add-apt-repository ppa:ondrej/php
sudo apt-get update
sudo apt-get install php8.1
sudo systemctl restart apache2
sudo apt install php8.1-common php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-curl php8.1-gd php8.1-imagick php8.1-cli php8.1-dev php8.1-imap php8.1-mbstring php8.1-opcache php8.1-soap php8.1-zip php8.1-intl -y
sudo systemctl restart apache2

## Laravel
- MVC, Orientação a Objetos, Blade, Laravel Mix, SQLite
composer install
composer create-project laravel/laravel controle-series
npm install laravel-mix --save-dev
const mix = require('laravel-mix'); // Adicione na raiz do projeto o arquivo webpack.mix.js
"scripts": {"mix": mix} // Adicione a linha mix no package.json
npm run dev // Vai executar o npm run mix
dd($series); // dump and die, semelhante ao var_dump

## NPM
npm install

## Bootstrap
npm install bootstrap
@import "~bootstrap/scss/bootstrap"; // Adicionar essa linha ao arquivo resources/css/app.scss (renomear o arquivo app.css)
mix
    .sass('resources/css/app.scss', 'public/css') // Adicionar essa função no arquivo webpack.mix.js
    .postCss() // Remover essa função

## Apache
sudo /etc/init.d/apache2 start
sudo /etc/init.d/apache2 stop
sudo /etc/init.d/apache2 restart

## Sqlite
sqlite3
Plugin VsCode SQLite alexcvzz -> Ctrl + Sifht + p -> sqlite + command
sudo apt install php-sqlite3
sudo apt install php8.1-sqlite3

## PHP ini
sudo vim /etc/php/8.1/cli/php.ini

## Artisan
php artisan
php artisan serve
php artisan serve --host=0.0.0.0 --port=8000
php artisan make:controller SeriesController
php artisan make:component Titulo # (Baseado em classes) Criar sempre com a primeira letra maiuscula, pois será criado uma Classe que podemos manipular os dados da view
php artisan make:component layout –view # (Componentes anônimos) Cria view sem a classe
php artisan make:migrate create_series_table
php artisan migrate
php artisan make:model Serie

## Estrutura de Pastas
app - CONTROLLER, MODEL, a maioria dos códigos
bootstrap - É o que o laravel necessita para iniciar
config - Configuração da aplicação
database - Configuração do Banco de Dados
lang - Configurações de traduções
node_modules - Pacotes do npm
public - É acessível pelo servidor web
resources - VIEW - Relacionados ao Front End
routes - Configuração das rotas
storage - Armazena imagens, uploads de usuários
vendor - Pacotes do composer

## Documentação do Laravel
https://laravel.com/docs/9.x/controllers#resource-controllers
GET	        /photos	                index	    photos.index
GET	        /photos/create	        create	    photos.create
POST	    /photos	                store	    photos.store
GET	        /photos/{photo}	        show	    photos.show
GET	        /photos/{photo}/edit    edit	    photos.edit
PUT/PATCH	/photos/{photo}	        update	    photos.update
DELETE	    /photos/{photo}	        destroy	    photos.destroy

https://laravel.com/docs/9.x/blade#components

## Database
factories - Criação de dados falsos, fábrica para criar 100 ou 1000 usuários por exemplo
migrations -  Versionamento do banco de dados, pontos de alteração
seeders - Criadores de dados para inserir no banco de dados assim que aplicação for inicializada - usuário padrão com permissão de administrador