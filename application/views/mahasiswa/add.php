<div class="container">

    <div class="row-mt-3">
        <div class="col-mt-6">

            <div class="card">
                <div class="card-header">
                    Form Add Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if( validation_errors() ) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                        
                    <form action="" method="post">
                         <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name">
                        </div>

                        <div class="form-group">
                            <label for="matricNo">Matric No</label>
                            <input type="text" name="matricNo" class="form-control" id="matricNo">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                            
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control" id="course" name="course">
                                <option value="Software Engineering">Software Engineering</option>
                                <option value="Artificial Intelligence">Artificial Intelligence</option>                        
                                <option value="Information System">Information System</option>                        
                                <option value="Networking">Networking</option>
                                <option value="Data Science">Data Science</option> 
                            </select>
                        </div>
                        <button type="submit" name="add" class="btn btn-primary float-right">Add Data</button>
                    </form>
                </div>
                
            </div>
        </div>
    
    </div>

</div>