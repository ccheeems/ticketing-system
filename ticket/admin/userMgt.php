<?php
include '../template/admin-temp/admin-header.php';
?>

<div class = "overview-section p-4">
            <div class = "row overview-section-title">
                <h4>Student</h4>
                <p class = "small text-grey">Insert <span class = "text-blue">cards and images</span> to showcase on your home</p>

                </div>

            
            <div class="row">
                <div class="col-12 mt-3">

                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Position</th>
                                <th>Cell Num</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td></td>
                                <td>admin@admin</td>
                                <td>•••••</td>
                                <td>Hakdog</td>
                                <td>Sample Address</td>
                                <td>Female</td>
                                <td>Admin</td>
                                <td>09123456789</td>
                                <td><button class="btn btn-success newUser" data-bs-toggle="modal" data-bs-target="#editAdminForm"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td></td>
                                <td>admin@admin</td>
                                <td>•••••</td>
                                <td>Hakdog</td>
                                <td>Sample Address</td>
                                <td>Female</td>
                                <td>Admin</td>
                                <td>09123456789</td>
                                <td><button class="btn btn-success newUser" data-bs-toggle="modal" data-bs-target="#editAdminForm"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-bi bi-trash"></i></button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td></td>
                                <td>admin@admin</td>
                                <td>•••••</td>
                                <td>Hakdog</td>
                                <td>Sample Address</td>
                                <td>Female</td>
                                <td>Admin</td>
                                <td>09123456789</td>
                                <td><button class="btn btn-success newUser" data-bs-toggle="modal" data-bs-target="#editAdminForm"><i class="bi bi-pencil-square"></i></button>
                                <button class="btn btn-danger"><i class="bi bi-bi bi-trash"></i></button></td>
                            </tr>
                            
                        
                        </tbody>
                    </table>
                </div>
            </div>


                
            </div>

            
        </div>
    </div>

<?php
include '../template/admin-temp/admin-footer.php';
?>