
@extends('layouts.app');

@section('content')  
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <did class="col-sm-12 col-lg-6">
                                <h5 class="card-title"><?= $pageName ?></h5>
                            </did>
                            <did class="col-sm-12 col-lg-6 d-flex flex-sm-row-reverse">
                                <div class="card-title">
                                    <button type="button" class="btn btn-success btn-sm">Export to Excel</button>
                                </div>
                            </did>
                        </div>
                    </div>
              
                    <!-- Deposits Table with stripped rows -->
                    <table class="table table-striped datatable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">User</th>
                            <th scope="col">Activity</th>
                            <th scope="col">Reference</th>
                            <th scope="col">Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                $x=72;
                                for($i=1;$i<=$x;$i++):
                            ?>
                            <tr>
                              <th scope="row"><?= $i; ?></th>
                              <td>Bridie Kessler</td>
                              <td>Activity name</td>
                              <td><?= rand(12323456784,52323456784); ?></td>
                              <td>2014-12-05 13:05:05</td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                    <!-- End Deposits Table with stripped rows -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
