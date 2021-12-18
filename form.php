<form action='form.php' method='GET'>
    <input type='text' name='username'>
    <input type='submit'>
</form>
<?php
// $_GET ['form.php'];
if ( $_GET ['username'] == 'jack') {
    echo 'hello' . $_GET ['username'];
}
else{
    echo 'bye bye' . $_GET ['username'];
}
?>
