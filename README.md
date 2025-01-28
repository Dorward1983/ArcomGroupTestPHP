
# PHP 8.4 project with Docker

This project is a simple environment for PHP 8.4 development using Docker.

## Requirements

- [Docker](https://www.docker.com/get-started) (version 20.10 or higher)
- [Docker Compose](https://docs.docker.com/compose/install/) (version 1.27 or higher)


## Installation

1. Clone this repository to your local computer:

   ```bash
   git clone https://github.com/Dorward1983/ArcomGroupTestPHP.git
   ```

2. Go to the project folder:

   ```bash
   cd ArcomGroupTestPHP
   ```

3. Run the project using docker compose:

   ```bash
   docker-compose up --build
   ```

4. Run the PHP script:

   ```bash
   docker-compose exec app php index.php
   ```

5. Script result:

   ```bash
   int(90000)
   bool(true)
   ```
