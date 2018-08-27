# GetVisitorIpAndLocation 获取访问者ip以及定位
####前提：
前几天一亲戚被网上骗子骗了，所以花点时间写了这点东西，希望可以钓鱼到骗子的ip和定位。

###使用方法：
访问  index.php 后面GET方式接上 qq 参数，如 http://host?qq=123456 ，分享给对方，对方打开连接后，会在index.php目录下创建 /4ddd7ed2c916bfc81505aa14ca1dac57 目录，并在目录下创建 123456Log.txt，访问 http://host/4ddd7ed2c916bfc81505aa14ca1dac57/123465Log.txt 便可查看对应访问的一些信息，如果qq为空会写入 alllLog.txt文件。

####附：
由获取到的ip可以在  http://chaipip.com/ip.php 与 http://www.ipplus360.com/ip/?chaipip.com 网站查询对应的定位。
