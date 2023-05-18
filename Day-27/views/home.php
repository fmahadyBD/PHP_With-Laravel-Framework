<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css"/>
</head>
<body>
<section class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                     <table class="table table-bordered table-hover">
                         <thead>
                         <tr>
                             <th>Student ID</th>
                             <th>Student Name</th>
                             <th>Student Mobile</th>
                             <th>Student Email</th>
                             <th>Student Image</th>
                         </tr>

                         </thead>

                         <tbody>

                         <?php foreach ($students as $student) { ?>
                         <tr>
                             <td><?php echo $student['id'];?></td>
                             <td><?php echo $student['name'];?></td>
                             <td>
                                 <?php foreach ($student ['mobile'] as $value)
                                 {
                                     echo $value. ',';
                                 }
                                 ?>
                             </td>
                             <td><?php echo $student['email'];?></td>
                             <td><?php echo $student['image'];?></td>
                         </tr>
                         <?php } ?>
                         </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>
