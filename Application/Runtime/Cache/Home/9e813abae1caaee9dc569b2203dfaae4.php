<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <script>
        function checkUser(){
            var result = document.getElementById("userid").value;

            if(result == ""  ){
                alert("用户名不能为空");
                return false;
            }
            document.getElementById("formid").submit();
        }
    </script>
</head>
<body>
<from id="formid" action = '' method="post">
    <input id="userid" type="text" value="" placeholder="请输入您的名字">
    <select>
        <option value =男" selected="selected">男</option>
        <option value ="女">女</option>
    </select>
    <P>
        <input type="button" value="提交" onclick = "checkUser();" />
    </P>
</from>


</body>

</html>