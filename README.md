# 百度贴吧签到库

提供一个基于cookie验证的百度贴吧签到方案,使用WordPress的HTTP请求库

## 安装

### 使用github

  直接使用

  `https://github.com/jerry-yuan/tieba.git`

  然后编辑并执行`demo.php`

 
## 签到
  BDUSS是你的百度登陆后的cookie中的BDUSS的值

```php
$BDUSS = "你的BDUSS";
$kw = "要签到的吧名";
$tieba = new CTieba($BDUSS);
//提供单个贴吧签到，参数$kw为贴吧名
$tieba->sign($kw);
//提供所有自己喜欢的贴吧签到
$tieba->multisign();
```

## 鸣谢
Fork 自 friparia/tieba