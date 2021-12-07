
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
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addNewVendor">
                                        <i class="bi bi-plus-circle"> Add New Vendor</i>
                                    </button>
                                </div>
                            </did>
                        </div>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Vendor</th>
                                <th scope="col">Account Type</th>
                                <th scope="col">Account Number</th>
                                <th scope="col">Account ID</th>
                                <th scope="col">Charge(%)</th>
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
                                <td>Airtel</td>
                                <td><?= rand(12323456784,52323456784); ?></td>
                                <td>sampay10101</td>
                                <td>1</td>
                            </tr>
                          <?php endfor; ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
