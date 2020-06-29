   

    <div class="row d-flex  justify-content-center m-2">
       <h2>Voici la liste des chambre</h2>
    </div>
    <div class="container  d-flex align-items-center justify-content-center ">
        <div class="border col-md-6 rounded p-4 bg-warning" >
        <table class="table table-striped">
        <thead>
                <th scope="col">Numcham</th>
                <th scope="col">Numdep</th>
                <th scope="col">Typecham</th>
                <th scope="col">modif</th>
                <th scope="col">supprimer</th>
            <tr>
            <tbody>
   
                <?php foreach($chambre[0] as $ch) {?>
                <tr> <?php
                    echo '<td>'.$ch['numcham'].'</td>';
                    echo '<td>'.$ch['numdep'].'</td>';
                    echo '<td>'.$ch['typecham'].'</td>';
                    echo '<td> <img style="width: 15px;" src="../public/img/download modif.png"
                     class="rounded float-right" alt="."></td>';
                    echo '<td> <img style="width: 15px;" src="../public/img/ic-supprimer.png"
                     class="rounded float-right" alt="."></td>';
                    } ?>
                </tr>
            </tbody>
            </tr>
        </thead>
        </table>
        <div class="form-row  mb-2">
            <div class="form-group col-md-5 mr-auto ">
                <button type="submit" class="btn btn-light bg-dark col-md-12 text-white" id="btn" onclick="">PRECEDENT</button>
            </div>
            <div class="form-group col-md-5 ml-auto ">
                <button type="submit" class="btn btn-light bg-dark col-md-12 text-white" id="btn" onclick="">SUIVANT</button>
            </div>
        </div>
    </div>
