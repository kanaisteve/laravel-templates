
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
              
                    <!-- Statement Table with stripped rows -->
                    <table class="table table-striped datatable">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Reference</th>
                                <th scope="col">DR/CR</th>
                                <th scope="col">Credit</th>
                                <th scope="col">Debit</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $x=21;
                                for($i=1;$i<=$x;$i++):
                            ?>
                            <tr>
                                <th scope="row">2021-10-27</th>
                                <td>Opening Balance</td>
                                <td><?= rand(12323456784,52323456784); ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>0.00</td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                    </table>
                    <!-- End Statement Table with stripped rows -->
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
