# 秒杀系统

[![PHP Require Version](https://img.shields.io/badge/php-%3E%3D5.6-8892BF.svg)](https://secure.php.net/)

### 实现步骤
1. 首先创建redis商品库存队列
2. 客户端用户访问秒杀API接口
3. 然后从redis的商品库存队列中查询剩余库存量
4. redis队列中有剩余量，则在mysql中创建订单去库存，抢购成功
5. redis队列中没有剩余，则提示库存不足，抢购失败

### 环境
* php5.6 + phpredis扩展
* redis服务
* apache2
* mysql innodb 支持事务和行锁

### Support

如果你在使用中遇到问题，请联系: [2292242034@qq.com](mailto:2292242034@qq.com)

#### 如果需要秒杀系统视频教程，请关注微信公众号[ 代码技巧 ]获取


