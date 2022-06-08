<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Add News </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
</head>
<body>

  <!-- Modal -->
  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add News </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <form action="inseartnews.php" method="POST">

                  <div class="modal-body">

                    <div class="form-group">
                       <label> Date</label>
                    <input type="date" name="dat" id="dat" class="form-control"  placeholder="">
                    </div>

                      <div class="form-group">
                          <label> News</label>
                          <input type="text" name="news" class="form-control" placeholder="Enter News">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" name="insertdata" class="btn btn-primary">Submit</button>
                  </div>
              </form>

          </div>
      </div>
  </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete News </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="newsdelete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Confirm </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <?php include('nav_bar.inc.php') ?>
      <section class="home-section">
    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2> Add News</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addmodal">
                        ADD NEW
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

              <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'imf');

                $query = "SELECT * FROM news";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">Date</th>
                              <th scope="col">News </th>
                              <th scope="col"> DELETE </th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
            ?>
                        <tbody>
                            <tr>
                              <td> <?php echo $row['id']; ?> </td>
                              <td> <?php echo $row['dat']; ?> </td>
                              <td> <?php echo $row['news']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                    }
                }
                else
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>

  </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>



    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search Your Data",
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

</body>
</html>
