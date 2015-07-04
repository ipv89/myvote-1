<?php

//db include here

// example data, this is what will be passed by the form
$result = '{"id": "abc123", "voted": "1", "party":"freeparking party", "mp":"somerandomguy"}';
$person = json_decode($result, true);

//Check if the record exists, the database will not allow this insert but its better to catch the error here I think

$record_check = mysql_query("SELECT * FROM table1 WHERE id = '".$person['name']."' ");
$check_result = mysql_num_rows($record_check);


if ($check_result === 0) {



}











INSERT INTO `myvote`.`Vote`
(`id`,
`voted`,
`party`,
`mp`)
VALUES
(<{id: }>,
<{voted: 0}>,
<{party: }>,
<{mp: }>);
SELECT * FROM myvote.Vote;