TP3 answers

question 1
i get The selected status is invalid.
cz the rule Rule::in(Ticket::STATUSES) only accepts waiting, helping or done

question 2
Ticket::waiting()->toSql() gives :
select * from "tickets" where "status" = ? order by "id" asc
so the scope makes a query that takes only the tickets with status waiting, sorted by id, the ? is replaced by waiting when the query runs
