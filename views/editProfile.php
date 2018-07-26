<div class="container content-container d-none">
    <form class="form form-group " action="/Profile/updateAction" method="post">
        <input class="d-none" type="text" name="id" value="<?= $data["id"] ?>">
        <label for="email">EMAIL:</label>
        <input class="form-control" type="text" name="email" value="<?= $data["email"] ?>">
        <br>
        <label for="password">Password:</label>
        <a class="btn btn-info btn-sm">Change Password</a>
        <br>
        <label for="firstname">First Name:</label>
        <input class="form-control" type="text" name="firstname" value="<?= $data["firstname"] ?>">
        <br>
        <label for="lastname">Last Name:</label>
        <input class="form-control" type="text" name="lastname" value="<?= $data["lastname"] ?>">
        <br>
        <label for="occupation">Occupation</label>
        <input class="form-control" type="text" name="occupation" value="<?= $data["occupation"] ?>">
        <br>
        <label for="about">About:</label><br>
        <textarea  class="form-control" rows="5" name="about"><?= $data["about"]?></textarea>
        <br>
        <input type="submit" class="btn btn-success" href="/Profile/updateAction" value="UPDATE">
    </form>
    <hr>
    <form class="form form-group text-right" action="/Profile/deleteAction" method="post">
        <input class="d-none" type="text" name="id" value="<?= $data["id"] ?>">
        <input type="submit" class="btn btn-danger" href="/Profile/deleteAction" value="DELETE!!">
    </form>
</div>