<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LaPose</title>
<link href="__PUBLIC__/css/systemload.css" rel="stylesheet"/>
<link href="__PUBLIC__/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<script src="__PUBLIC__/js/jquery-1.11.2.min.js"></script>
<script src="__PUBLIC__/js/systemload.js"></script>
<link href="__PUBLIC__/js/bootstrap/bootstrap.min.js" rel="stylesheet">
<!--<link rel="shortcut icon" href="__PUBLIC__/images/favicon.ico" /> -->

</head>

<body>
   <h>这是project_detailinfo页</h>
   <div class="project_detailinfo">
       <table border="1" class="table table-striped table-bordered table-hover">
           <tr>
              <td>投资人</td>
              <td>投资领域</td>
           </tr>
           <tr>
              <td>{$investor_name}</td>
              <td>
              <volist name="investor_area" id="vo">                 
                  {$vo.area}、
	          </volist>
            </td>
           </tr>
	          
	   </table>
   </div>

</body>
</html>
