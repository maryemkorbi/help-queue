TP3 answers

question 1
i get The selected status is invalid.
cz the rule Rule::in(Ticket::STATUSES) only accepts waiting, helping or done

question 2
Ticket::waiting()->toSql() gives :
select * from "tickets" where "status" = ? order by "id" asc
so the scope makes a query that takes only the tickets with status waiting, sorted by id, the ? is replaced by waiting when the query runs

question 3
there are 8 people ahead of me (my ticket is number 9 in the Waiting list)
i counted the Waiting section of the queue and its the same number, its all the waiting tickets that came before mine (smaller id)

question 4
the badges show json now, like {"id":2,"name":"Laravel","created_at":"...","updated_at":"..."}
cz the topic column was deleted, now $ticket->topic is the relationship so it gives the whole Topic object, and when blade prints an object laravel turns it into json

question 5
i get The selected topic id is invalid.
its the rule exists:topics,id, it checks that the id really exists in the topics table and there is no topic with id 99

question 6
i clicked the Git badge, the topic page opens and it says 3 tickets

question 7
the list has 9 items, one for each waiting ticket
the topic object of each item has id, name, created_at and updated_at
a program that could use it : a mobile app, or a javascript page that shows the queue on a screen in the classroom, or postman, or a python script

question 8
[yes my neighbour's project started / no, the missing step was ...]

bonus
- i gave a third argument to validate() : ['topic_id' => 'topic'], so the error now says The selected topic is invalid. instead of topic id
- on the queue page there is one link per topic with its number of tickets, i used Topic::withCount('tickets') in the controller and $topic->tickets_count in the view

final questions

1) what does Ticket::waiting() do and why a scope is better than repeating the where
it gives only the tickets with status waiting sorted by id
a scope is better cz the rule is written once in the model, i reuse it everywhere with a short name (index, show, queue.json) and if the rule changes i only change it in one place

2) which table holds the topic_id column and why on that side
the tickets table holds topic_id
cz a ticket belongs to one topic but a topic has many tickets, so each ticket can store just one topic id, a topic cant store a list of ticket ids in one column

3) who besides a browser could use /queue.json
a mobile app, a javascript frontend, a screen in the classroom showing the queue, another website, postman or a python script, anything that can read json
