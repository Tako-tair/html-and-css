<?php
if(isset($_GET['id'])){
    require 'dbinfo.php';
    $student = getOneStudent($_GET['id']);
    if($student != null){
        ?>
        <form action="editstudents.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $student['id']; ?>">
            NAME: <br><input type="text" name="studname" value="<?php echo $student['name']; ?>"><br>
            <label>PASSWORD</label><br>
            <input type="password"  maxlength="25" size="40" name="password" placeholder="PASSWORD"><br>
            AGE: <br><input value="<?php echo $student['age']; ?>" type="number" name="age"><br>
            <label>E-MAIL WRITE</label><br>
            <input type="email"  maxlength="25" size="40" name="email" placeholder="E-MAIL"><br>
            CITY:
            <select name="city">
                <option <?php if($student['city'] == 'Almaty'){echo 'selected';} ?> value="Almaty">Almaty</option>
                <option <?php if($student['city'] == 'Shymkent'){echo 'selected';} ?> value="Shymkent">Shymkent</option>
                <option <?php if($student['city'] == 'Astana'){echo 'selected';} ?> value="Astana">Astana</option>
            </select><br>
            UNIVERSITY<select name="university">
                <option <?php if($student['city'] == 'iitu'){echo 'selected';} ?> value="iitu">iitu</option>
                <option <?php if($student['city'] == 'sdu'){echo 'selected';} ?> value="sdu">sdu</option>
                <option <?php if($student['city'] == 'aitu'){echo 'selected';} ?> value="aitu">aitu</option>
                <option <?php if($student['city'] == 'kbtu'){echo 'selected';} ?> value="kbtu">kbtu</option>
            </select>
            <div class="manwomen" id="manwomen" name="manwomen">
                <STRONG>CHOOSE YOUR GENDER</STRONG><br>
                <input type="radio"  name="gender" value="MAN" checked/><label>MAN</label><br>
                <input type="radio" name="gender" value="WOMEN"/><label>WOMAN</label>
            </div>
            <button type="submit">UPDATE</button>
        </form>
        <?php
    }
}

?>