# Help Queue

A queue students use to ask for help during practical sessions (Laravel).

## Installation

```
git clone https://github.com/maryemkorbi/help-queue.git help-queue
cd help-queue
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
composer run dev
```

The database file is not in Git: the migrate command offers to create it, answer yes.

On Windows PowerShell, use `copy .env.example .env` instead of `cp`.

Then open http://localhost:8000
