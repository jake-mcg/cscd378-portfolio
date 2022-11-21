<?php require_once "header.php";


if (!$auth->isLogged()) {
    header('HTTP/1.0 403 Forbidden');
    echo "Forbidden";

    exit();

}
?>
<div class="container">
    <div class="row">
        <div class="col">
            <p>
                TODO: add admin features
            </p>
        </div>
    </div>
</div>

<?php require_once "footer.php";?>
