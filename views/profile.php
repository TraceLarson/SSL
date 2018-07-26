<div class="container content-container d-none">
    <div class="col-md-12 col-xs-12">
        <img src="/assets/profile_23.jpg" class="img-thumbnail picture d-xs-none"/>
        <form action="/Profile/updatePic" method="post" enctype="multipart/form-data">
            <label class="btn btn-primary btn-file mt-2" style="width: 100px;">Browse
                <input name="img" type="file" style="display: none;" value="Browse">
            </label>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
            <div>
                <h4>Email:<?= $data["email"] ?> </h4>
                <h4>First Name:<?= $data["firstname"] ?></h4>
                <h4>Last Name:<?= $data["lastname"] ?></h4>
                <h4>Occupation:<?= $data["occupation"] ?></h4>
                <h3>About:</h3>
                <p>
                    <span><?= $data["about"] ?></span>
                </p>
                <a href="/Profile/showUpdateForm" class="btn btn-info">Edit Profile</a>
            </div>
    </div>
</div>