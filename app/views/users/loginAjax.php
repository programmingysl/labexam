

<?php require APPROOT . '/views/inc/header.php'; ?>
    <form method="post" action="http://localhost/spExam/users/loginAjax" id="ajaxAccount">
        <input type="text" name="email" id="email" placeholder="email">
        <input type="password" name="password" id="pass" placeholder="password">
        <input type="submit" name="submit">
    </form>
<script>
    document.getElementById('ajaxAccount').addEventListener('submit', postName);

    function postName(e){
        e.preventDefault();

        var email = document.getElementById('email').value;
        var password=document.getElementById('pass').value;
        var params = "email="+email +"&password="+password+"&submit=submit";

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost/spExam/users/loginAjax', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

        xhr.onload = function(){
            document.write(this.responseText);
        }

        xhr.send(params);
    }

</script>

<?php require APPROOT . '/views/inc/footer.php'; ?>

