<?php
if (isset($_POST['submit1'])) :
    $required = $_POST['required'];
    $r = $_POST['r'];
    $ca = $_POST['ca'];
    $fa = $_POST['fa'];
    $ri = $_POST['ri'];

    $tr = 1 + $r;
    $get = $required * pow(1 + (0.01*$r), $fa - $ca);
    $year=$get/(($fa-$ca)*(1 + (0.01*$ri)));
    $monthly=$year/12;



endif;
?>
<?php include_once("navbar.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="design3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Education Planning Calculator</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-6 mx-auto py-5">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center font-weight-bold">
                    Education Planning Calculator
                    </div>

                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="number" name="required" placeholder="Present Cost Of Education " required="" class="form-control" value="<?php if (!empty($required)) : echo $required;
                                                                                                                                                        endif; ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" name="r" placeholder="Expected Inflation Rate (P.A)" required="" class="form-control" value="<?php if (!empty($r)) : echo $r;
                                                                                                                                                    endif; ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" name="ca" placeholder="Current Age Of Your Child " required="" class="form-control" value="<?php if (!empty($ca)) : echo $ca;
                                                                                                                                                endif; ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" name="fa" placeholder="How Old Your Child Will Be When You Need This Money?" required="" class="form-control" value="<?php if (!empty($fa)) : echo $fa;
                                                                                                                                                                            endif; ?>">
                            </div>
                            <div class="form-group">
                                <input type="number" name="ri" placeholder="Expected Rate Of Return On Investment (P.A)" required="" class="form-control" value="<?php if (!empty($ri)) : echo $ri;
                                                                                                                                                                    endif; ?>">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" name="submit1" class="btn btn-success" value="Calculate">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-white">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Future Value Of Cost Of Education </th>
                                <th>&#8377; <?php echo number_format(@$get); ?></th>
                            </tr>
                            <tr>
                                <th>Investment Required Per Month To Meet Your Child's Cost Of Education </th>
                                <th>&#8377; <?php echo number_format(@$monthly); ?></th>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>