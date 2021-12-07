
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
                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addNewUser">
                                        <i class="bi bi-person-plus"> Add New User</i>
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
                                <th scope="col">Names</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile No.</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
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
                                <td>name@email.com</td>
                                <td><?= rand(123234567,523234567); ?></td>
                                <td>user</td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
                                </td>
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
