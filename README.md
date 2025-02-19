# TeamBuilder Laravel-Vue

Laravel + VueJS version of [TeamBuilder](https://github.com/yannickcpnv/teambuilder).

## What is used

| Tool                                             | Version |
|--------------------------------------------------|---------|
| [PHP](https://www.php.net/)                      | 8.1.4   |
| [Laravel](https://laravel.com/)                  | 9.5.1   |
| [Npm](https://www.npmjs.com/)                    | 8.5.0   |
| [VueJS](https://vuejs.org/)                      | 3.2.31  |
| [InertiaJS](https://inertiajs.com/)              | 0.1.0   |
| [PicoCss](https://picocss.com/)                  | 1.5.0   |

Other dependencies can be found in [composer.json](composer.json) and [package.json](package.json) files.

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yannickcpnv/teambuilder-laravel-vue.git
    cd teambuilder-laravel-vue
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install JavaScript dependencies:
    ```sh
    npm install
    ```

4. Copy the example environment file and make the required configuration changes:
    ```sh
    cp .env.example .env
    ```

5. Generate the application key:
    ```sh
    php artisan key:generate
    ```

## Setup

1. Run the database migrations with seed:
    ```sh
    php artisan migrate --seed
    ```

2. Build the front-end assets:
    ```sh
    npm run dev
    ```

## Usage

1. Start the local development server:
    ```sh
    php artisan serve
    ```

2. Visit <http://localhost:8000> in your browser.

### Login Information

1. Look into the `members` table in your database to find an existing username
2. Use that username to log in with the password: `password`
3. The user's role (MEM or MOD) can be found in the `role` column of the `members` table
