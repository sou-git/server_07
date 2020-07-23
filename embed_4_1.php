        $_SERVER['REQUEST_METHOD'] === 'POST';
        $sugaku = $_POST['sugaku'];
        var_dump($sugaku);
        $_SERVER['REQUEST_METHOD'] === 'POST';
        $eigo = $_POST['eigo'];
        var_dump($eigo);

        <label for="">数学</label><br>
        <input type="text" name="sugaku"><br>
        <label for="">英語</label><br>
        <input type="text" name="eigo"><br>

        <?php echo $sugaku; ?>
        <?php echo $eigo; ?>

        <div>
            <label for="">国語</label><br>
            <input type="text" name="kokugo"><br>
            <?php echo $kokugo ?>
        </div>
        <div>
            <label for="">数学</label><br>
            <input type="text" name="y"><br>
            <?php echo $y ?>
        </div>
        <div>
            <label for="">英語</label><br>
            <input type="text" name="z"><br>
            <?php echo $z ?>
        </div>