## Installation

### Setup
1. Clone repository.
    ```bash
    git clone https://github.com/tansweeyang/online-shopping-system.git
    ```

2. Install styling libraries.
    ```bash
    npm install bootstrap
    npm install slick-carousel
    npm install nouislider
    npm install @fortawesome fontawesome-free
    ```

3. Compile css.
    ```bash
    npm run dev
    ```

### Database
1. Create onlineshoplaravel database in phpmyadmin. 
<br>

2. Run the migration.
    ```bash
    php artisan migrate
    ```
<br>

3. Seed the database.
    ```bash
    php artisan db:seed --class=DatabaseSeeder
    ```
<br>

### Insert Code
1. The model and migration is done, create your views and controllers.
<br>
2. Ask me if got any problem in installing, because I might miss things in this doc.