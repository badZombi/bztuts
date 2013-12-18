<?php
if ($db = sqlite3::open('testdb.db',0666,$sqliteerror)) {
  sqlite_query($db,'CREATE TABLE IF NOT EXISTS test (name char(50),
     phone char(20))');
  $query = "SELECT * FROM test";
  if($result = sqlite_query($db, $query)){ 
    while($row = sqlite_fetch_array($result,SQLITE_ASSOC))
    { print ("Name: {$row['name']}" ."Phone: {$row['phone']}");}
  }
  sqlite_close($db);
}
else{die($sqliteerror);}

?>