<fieldset>
    <legend>會員註冊<legend>
    <div style="color:red">*請設定您要註冊的帳號及密碼（最長12個字元）</div>
    <table>
        <tr>
            <td>Step1:登入帳號</td>
            <td>
                <input type="text" name="acc" id="acc">
            </td>
        </tr>
        <tr>
            <td>Step2:登入密碼</td>
            <td>
                <input type="password" name="pw" id="pw">
            </td>
        </tr>
        <tr>
            <td>Step3:再次確認密碼</td>
            <td>
                <input type="password" name="pw2" id="pw2">
            </td>
        </tr>
        <tr>
            <td>Step4:信箱(忘記密碼時使用</td>
            <td>
                <input type="text" name="email" id="email">
            </td>
        </tr>
        <td>
            <button onclick="reg()">註冊</button>
            <button onclick="reset()">清除</button>
        </td>
    </table>
</fieldset>

<script>

// 清除
// $("#acc,#pw,#pw2,#email").val("") 簡寫
function reset(){ 
    $("#acc").val("");
    $("#pw").val("");
    $("#pw2").val("");
    $("#email").val("");
}

//註冊
function reg(){ 
    // 取值
    let form={ acc:$("#acc").val(),
           pw:$("#pw").val(),
           pw2:$("#pw2").val(),
           email:$("#email").val()
        }

    // firm.acc欄位
    // 假設,判斷是不是空字串
    // if(Object.values(form).indexOf('')>=0){
    if(form.acc=='' || form.pw=='' || form.pw2=='' || form.email==''){
        alert("不可空白")
    }else{
        //假設pw,pw2有值,但不一樣
        if(form.pw!=form.pw2){
            alert("密碼錯誤")
        }else{
             // 這邊CHK回值要跟前端溝通好看是傳回何種形式的值
            $.post("api/chk_acc.php",{acc:form.acc},(chk)=>{
                // 傳到api/chk_acc.php檢查資料表 , count 有同值存在會回傳1 沒有會回傳0
                    // parseInt比較保險,不然有時可比對有時又不可比對
                if(parseInt(chk)==1){
                    alert('帳號重複')
                }else{
                    // 先把pw2刪除，不然資料表會對不上，執行會失敗
                    delete form.pw2
                    // 拿post
                    $.post("api/reg.php",form,(res)=>{
                        alert("註冊完成，歡迎加入")
                        location.href='index.php?do=login'
                    })
                }
            })
        }
    }
}
</script>