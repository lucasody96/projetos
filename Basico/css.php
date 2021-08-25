<div class="titulo">INTEGRAÇÃO CSS E PHP</div>

<h1>
    <?php
        echo 'Olá ';
        echo '<small>';
        echo 'Mundo';
        echo '</small>'

    ?>
<?= '<div class=center>Aqui coloca qualquer texto</div>'?>
<br>

<div center>
 <button dobro>
    <?= 'Legal' ?>
 </button>

</div>

<style>
    button{
        background-color: #4286f4;
        padding: 2px <?= 10 + 10?>px; /*2px 20px*/
        color: #EEE;
        font-weight: bold;
    }
</style>
</h1>
