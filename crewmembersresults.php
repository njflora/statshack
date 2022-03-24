<div class="layer grey">
    <div class="container">
        <div class="row">
            <?php
            if($_SESSION["role"] == 2){ ?>
                <div class="col-lg-12 layer-title text-center">
                    <h2 class="title">Flight Crew</h2>
                </div>
                <?php foreach ($crew_members as $crew_member) { ?>
                    <div class="col-lg-4">
                        <div class="crew-image">
                            <div class="crew-text">
                                <h5><?php echo $crew_member['first_name'];?> <b><?php echo $crew_member['last_name'];?></b></h5>
                            </div>
                        </div><!--crew-image-->
                    </div><!--col-->
                <?php }}
            ?>
        </div>
    </div>
</div>
