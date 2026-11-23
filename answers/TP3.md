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
