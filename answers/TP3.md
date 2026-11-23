TP3 answers

question 1
i get The selected status is invalid.
cz the rule Rule::in(Ticket::STATUSES) only accepts waiting, helping or done

question 2
Ticket::waiting()->toSql() gives :
select * from "tickets" where "status" = ? order by "id" asc
so the scope makes a query that takes only the tickets with status waiting, sorted by id, the ? is replaced by waiting when the query runs

question 3
there are [NUMBER] people ahead of me
i counted the Waiting section of the queue and its the same number, its all the waiting tickets that came before mine (smaller id)

question 4
the badges show json now, like {"id":2,"name":"Laravel","created_at":"...","updated_at":"..."}
cz the topic column was deleted, now $ticket->topic is the relationship so it gives the whole Topic object, and when blade prints an object laravel turns it into json

question 5
i get The selected topic id is invalid.
its the rule exists:topics,id, it checks that the id really exists in the topics table and there is no topic with id 99

question 6
when i click the badge the topic page opens and it says [NUMBER] tickets
