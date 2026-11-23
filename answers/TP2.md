TP2 answers

question 1
no the names are not the same, cz fake() invents random names every time and migrate:fresh deletes everything then the seeder creates 8 new tickets

question 2
i get 404 not found
the part that looked for the ticket is show(Ticket $ticket) in the controller, laravel searches the ticket by its id automatically (route model binding) and gives 404 if it doesnt exist

question 3
i get 404 not found
laravel checks the routes from top to bottom, /tickets/{ticket} was before /tickets/create so it matched first and took create as the ticket id, then it searched a ticket with id create, didnt find it so it gave 404

question 4
without @csrf i got 419 page expired
the token protects against csrf attacks (cross site request forgery), its when another website tries to send a form to my app in my place without me knowing
