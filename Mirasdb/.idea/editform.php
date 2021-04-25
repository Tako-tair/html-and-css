<?php

if(isset($_GET['id'])){

    require 'dball.php';
    $student = getOneStudent($_GET['id']);

    if($student != null){

        ?>
        <form action="edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

            NAME: <input type="text" name="studname" value="<?php echo $student['login']; ?>"><br>
            AGE: <input value="<?php echo $student['age']; ?>" type="number" name="age"><br>
            e-mail: <input type="email"  maxlength="20" size="30" name="email" placeholder="e-email"><br>
            <label>select university</label><br>
            <select id="check" class="check" name="university">
                <option value="iitu" class="o">iitu</option>
                <option value="sdu" class="o">sdu</option>
                <option value="kbtu" class="o">kbtu</option>
                <option value="aitu" class="o">aitu</option>
            </select>
            </div>
            CITY:
            <select name="city">
                <option <?php if($student['city'] == 'Almaty'){echo 'selected';} ?> value="Almaty">Almaty</option>
                <option <?php if($student['city'] == 'Shymkent'){echo 'selected';} ?> value="Shymkent">Shymkent</option>
                <option <?php if($student['city'] == 'Astana'){echo 'selected';} ?> value="Astana">Astana</option>
            </select>
            gender:
            <select name="gender">
                <option <?php if($student['gender'] == 'man'){echo 'selected';} ?> value="man">man</option>
                <option <?php if($student['gender'] == 'women'){echo 'selected';} ?> value="women">women</option>
            </select>
            <button type="submit">UPDATE</button>
        </form>
        <?php
    }
}

?>