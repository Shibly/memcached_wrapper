## What is memcache ?
******

`Memcached` is a memory based caching system and it is a great caching tool available for nearly every scripting language.

I used it in php to speed up some applications as pure experimental purpose. I wanted a very clean way to implementing this in my various projects, with as little change
to the existing code as possible. In this package I demonstrate how to cache data into the memcached server and retrive it. Since `memcache` is an OBJECT caching system,
you can’t simply drop your mysql_query resource into memcache, ask for it at another time, and get your results back :)

Before running this code, be sure that you've a running instance of memcached server.


If you are a Mac user , here is the basic instruction on how to install memcache in your Mac. I velieve you've installed homebrew already in your mac. Here is the easy steps:

+ `brew install memcache`

  This command will install the memcache server on your mac. You'll also have to install the php library for memcache server. Type this command in your editor and hit enter


+ `brew install php55-memcache`

	I'm using php55 . If you've installed different php version using brew, then command should be different . Like if you've installed php 5.4 then the command will be
	
+ `brew install php54-memcache`	 

  Restart your apache server and you are done ! To work with memcache, you need to run the server before storing and retriving data. Simply typye this command in your server
  `memcache` and the server will run. Now play with the code. 	   



