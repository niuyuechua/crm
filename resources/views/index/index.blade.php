<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>layout 后台大布局 - Layui</title>
  <link rel="stylesheet" href="/layui/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">

    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          贤心
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退出</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item">
          <a class="" href="javascript:;">客户信息管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">新建客户</a></dd>
            <dd><a href="javascript:;">客户查询管理</a></dd>         
          
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">联系人管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">新建联系人</a></dd>
            <dd><a href="javascript:;">联系人查询管理</a></dd>
           
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">客户服务管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">服务信息添加</a></dd>
            <dd><a href="javascript:;">服务查询管理</a></dd>
            <dd><a href="javascript:;">日程安排管理/a></dd>
          </dl>
        </li>
      </ul>
    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">内容主体区域</div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © layui.com - 底部固定区域
  </div>
</div>
<script src="/layui/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>