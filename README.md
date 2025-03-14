# Fadgram starter kit

This is a Laravel project starter kit.

## Requirements

-   PHP >= 8.0
-   Composer
-   Node.js & npm

## Installation

1. Clone the repository:

    ```sh
    git clone https://github.com/talalalmrka/fadgram-starter-kit.git
    cd fadgram-starter-kit
    ```

2. Create database:

    ```sh
    touch database/database.sqlite
    ```

3. Install PHP dependencies:

    ```sh
    composer install
    ```

4. Install Node.js dependencies:

    ```sh
    npm install
    ```

5. Run the database migrations:
    ```sh
    php artisan migrate:fresh --seed
    ```

## Usage

-   Start the local development server:

    ```sh
    composer run dev
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
