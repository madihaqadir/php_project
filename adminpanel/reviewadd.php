<?php
include "header.php";
?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" id="proBanner">
            <div class="col-12">
                <span class="d-flex align-items-center purchase-popup">
                    <h1> Add Review</h1>
                </span>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="reviewaddaction.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="name">Visitor Name</label>
                            <input type="text" class="form-control" id="name" name="visitorname" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <input type="text" class="form-control" id="comment" name="comment" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="video_url">Video URL</label>
                            <input type="file" class="form-control" id="video_url" name="video_url" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary mr-2" name="sub">Submit</button>
                    </form>
                </div>
            </div>
        </div>

<?php
include "footer.php";
?>
