<fieldset>
    <legend>新增問卷</legend>
    <form action="api/que.php" method="post">

        <div >
            <div>
                <span class='clo'>問卷名稱</span>
                <input type="text" name="subject">
            </div>
        </div>

        <div class='clo' id="opt">
            <div id="opt1">
                <span></span>
                <input type="text" name="options[]">
                <input type="button" onclick="more()" value="更多">
            </div>
        </div>

        <div>
            <input type="submit" value="新增">
            <input type="submit" value="清空">
        </div>

    </form>
</fieldset>

<script>
function more(){
    let opt=`<div><input type="text" name="options[]"></div>`
    $("#opt1").append(opt);
}

</script>
