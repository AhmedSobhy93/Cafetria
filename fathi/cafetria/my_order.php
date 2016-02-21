<?php include_once './header.php'; ?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
<!--        <form class="form-inline" role="form"  method="post">-->

            <div class="form-group">
                <input id="user_id" value="1" hidden>
                <label for="from">Date From</label>
                <input type="date" class="form-control" id="from" name="from">
            </div>
            <div class="form-group">
                <label for="ro">Date To</label>
                <input type="date" class="form-control" id="to" name="to">
            </div>

<button type="submit" id="input-submit" name="input-submit" class="btn btn-primary">submit</button>
<!--        </form>-->
    </div>
    <div class="col-sm-2"></div>
</div>s
<div class="panel-group">
<!--    <div class="panel panel-default">-->
        <!--      <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" href="#name1">info </a>
                </h4>
              </div>-->
<!--        <div id="name1" class="panel-collapse collapse" >-->
            <div class="table-responsive" id="mytable">
                <!--table-->

            </div>
        </div>
        <div>hee</div>
    </div>

    <ul class="pagination pagination-lg">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
    </ul>
    <?php include_once './footer.php'; ?>