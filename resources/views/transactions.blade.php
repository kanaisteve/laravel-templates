
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
                            <th scope="col">Sender</th>
                            <th scope="col">Receiver</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Charge</th>
                            <th scope="col">Reference</th>
                            <th scope="col">Time</th>
                            <th scope="col">In</th>
                            <th scope="col">Out</th>
                            <th scope="col">POP</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                $x=72;
                                for($i=1;$i<=$x;$i++):
                            ?>
                            <tr>
                              <th><?= $i; ?></th>
                              <td>Kanai Mwila</td>
                              <td>Kay Mulonda</td>
                              <td>ZMW 64</td>
                              <td>ZMW 6</td>
                              <td><?= rand(12323456784,52323456784); ?></td>
                              <td>15:35</td>
                              <td></td>
                              <td></td>
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
