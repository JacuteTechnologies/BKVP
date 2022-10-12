# BKVP
BKVP - A compact key value storage system with a tiny PHP library to go with it. 

What is BKVP: BaseKeyValuePairs. It's like JSON, with key value pairs, but there's only one level of them. The equivlent of JSON would be {"example": "something"} as opposed to {1{"example", "something"}, 2{"example", "something"}}. However, BKVP is more compact than JSON and also does not restrict quote marks. The only restricted characters are the pipe "|" and the colon ":". File size is significantly smaller.

How to use the library:

. At the top of your PHP file, "require 'path/to/BKVPlib.php';"

. To make sure that the library is incldued correctly, you can run "echo checkLib();", this will return "Working." if you installed it correctly. 

. To read a value from a key in a BKVP file, use readBKVP("path/to/file", "keyname");

. To write an existing value in a BKVP file, use writeBKVP("path/to/file", "keyname", "datatowrite", false);

. To write a new key to a BKVP file, use writeBKVP("path/to/file", "keyname", "datatowrite", true);
