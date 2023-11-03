<?php 
session_start();
include_once "models/Entity/header.php"; 
?>

<div class="container">
    <form action="./model/db_booking.php" method="post">
        <input type="text" name="id_room" value="<?= $_GET["room"]; ?>" hidden>
        <input type="text" name="price" value="<?= $_GET["price"]; ?>" hidden>
        <div class="form-group link-light">
            <label>Start Date :</label>
            <input type="date" class="form-control border-success-subtle border-3 mt-3" name="start_date" >
        </div>
 
        <div class="form-group link-light mt-3">
            <label>End Date :</label>
            <input type="date" class="form-control border-success-subtle border-3 mt-3" name="end_date" >
        </div>

        <button type="submit"  class="btn btn-primary mt-5 mb-5 bg-secondary border-success-subtle border-2" name="book" value="submit">Submit</button>
    </form>
</div>

<?php include_once "views/inc/footer.php"; ?>