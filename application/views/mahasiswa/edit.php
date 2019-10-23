<div class="container">

    <div class="row-mt-3">
        <div class="col-mt-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">  
                    <form action="" method="post">
                        <input type="hidden" name="studentID" value="<?= $mahasiswa['studentID'] ?>">
                         <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $mahasiswa['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="matricNo">Matric No</label>
                            <input type="text" name="matricNo" class="form-control" id="matricNo" value="<?= $mahasiswa['matricNo']; ?>">
                            <small class="form-text text-danger"><?= form_error('matricNo'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                            
                        <div class="form-group">
                            <label for="course">Course</label>
                            <select class="form-control" id="course" name="course">
                                <?php foreach($course as $j): ?>
                                    <?php if($j == $mahasiswa['course']) : ?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
                
            </div>
        </div>
    
    </div>

</div>