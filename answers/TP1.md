TP1 answers

question 1
.env is not on github cz it has secrets like the app key and passwords so it shouldnt be public
vendor/ is excluded cz its just downloaded libraries, anyone can get them back with composer install so no need to store them

exercise 2
routes/web.php : Route::view('/', 'welcome')->name('home');
.env : DB_CONNECTION=sqlite
database/migrations : 3 migrations
app/Models/User.php : name, email, password

question 2
i get 404 not found cz there is no route that matches /helo

question 3
{name} matches only one part of the url, /hello/a/b has two parts so no route matches and laravel gives 404

question 4
the marquee tag shows as text and doesnt move
so {{ }} escapes the html, it protects the page from code that a user could inject

question 5
the table has 7 columns
i didnt write created_at and updated_at myself, they were created by $table->timestamps();

question 6
Illuminate\Database\Eloquent\MassAssignmentException Add [name] to fillable property to allow mass assignment on [App\Models\Ticket]

question 7
my ticket is number 4 cz the list is sorted by created_at and mine was created last

bonus
for /tickets/999 laravel gives 404 by itself cz show(Ticket $ticket) looks for the ticket in the database and ticket 999 doesnt exist

final questions

1) which files does the request go through when i open /tickets
routes/web.php → TicketController.php → Ticket.php (the model) → the sqlite database → tickets/index.blade.php → layouts/app.blade.php

2) what is a migration for and why its better than a table made by hand
a migration is a php file that describes a table in code, when i run php artisan migrate laravel creates the table in the database
its better than doing it by hand cz :
- the table is saved in git with the code
- everyone gets the same database with one command, without mistakes from typing it by hand
- it keeps a history of the changes

3) why Ticket::create(...) failed before adding $fillable
cz laravel protects against mass assignment, it refuses to fill many fields at once with Ticket::create unless the model allows them in $fillable, thats why in tinker i got MassAssignmentException telling me to add name to fillable
this protects the app, without it someone could add extra fields to a form and change things they shouldnt, with $fillable i decide what can be filled
