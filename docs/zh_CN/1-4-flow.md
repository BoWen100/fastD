# 流程图

我们一直以极简的方式来提供高效的环境，一下是框架整体的执行流程.

```
+--------------+         +-------------------+                           
|              |         |                   |                           
|    client    |-------->|  new application  |                           
|              |         |                   |                           
+--------------+         +-------------------+                           
        ^                          |                                     
        |                          |                                     
        |                          |                                     
        |                          v                                     
        |                +-------------------+                           
        |                |                   |                           
        |                |     bootstrap     |                           
        |                |                   |                           
        |                +-------------------+                           
        |                          |                                     
        |                          |                                     
        |                          v                                     
        |                +------------------+                            
        |                |                  |                            
        |                | service provider |                            
        |                |                  |                            
        |                +------------------+                            
        |                          |                                     
        |                          v                                     
        |                +------------------+        +------------------+
        |                |                  |        |                  |
        |                |  handle request  |------->|  route dispatch  |
        |                |                  |        |                  |
        |                +------------------+        +------------------+
        |                          |                           |         
        |                   +------+------+                    |         
        |                   |  exception  |                    |         
        |                   +------+------+                    |         
        |                          |                           |         
        |                          v                           v         
        |                +------------------+         +-----------------+
        |                |                  |         |                 |
        |                | handle exception |         | call middleware |
        |                |                  |         |                 |
        |                +------------------+         +-----------------+
        |                          |                           |         
        |                          |                           |         
        |                          v                           |         
        |                +------------------+                  |         
        |                |                  |                  |         
        +----------------| handle response  |<-----------------+         
                         |                  |                            
                         +------------------+                            
```

下一节: [路由与控制器](2-1-routing-and-controllers.md)