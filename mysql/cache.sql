The Query Cache is a technique that caches the results of SELECT queries so that following similar
queries may be delivered from the cache rather than performing them again, which can assist to 
improve speed, particularly for read-heavy workloads. To enable the query cache, 
set the query_cache_size variable to something other than 0.