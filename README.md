# Laravel Project

This is a Laravel project starter kit.

## Requirements

-   PHP >= 8.0o
-   Composer
-   Node.js & npm

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/talalalmrka/fadgram-starter-kit.git
    cd fadgram-starter-kit
    ```

2. Install PHP dependencies:

    ```sh
    composer install
    ```

3. Install Node.js dependencies:

    ```sh
    npm install
    ```

4. Copy the `.env.example` file to `.env`:

    ```sh
    cp .env.example .env
    ```

5. Generate an application key:

    ```sh
    php artisan key:generate
    ```

6. Set up your database configuration in the `.env` file.

7. Run the database migrations:
    ```sh
    php artisan migrate
    ```

## Usage

-   Start the local development server:

    ```sh
    php artisan serve
    ```

-   Compile the assets:
    ```sh
    npm run dev
    ```

## Testing

-   Run the tests:
    ```sh
    php artisan test
    ```

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
