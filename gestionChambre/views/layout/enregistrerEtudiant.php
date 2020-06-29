
   <div class="row d-flex  justify-content-center m-2">
       <h2>Veillez enregistrer un etudiant</h2>
   </div>
   <div class="container  d-flex align-items-center justify-content-center ">
        <div class="border col-md-6 rounded p-4 bg-warning">
            <form  >
                <div class="form-row  mb-2">        
                    <div class="form-group col-md-6">    
                        <img style="width: 15px;" src="<?=BASE_URL?>/public/img/download modif.png" class="rounded float-right" >           
                        <input type="text" class="form-control" placeholder="firstname">
                    </div>
                    <div class="form-group col-md-6">
                        <img style="width: 15px;" src="<?=BASE_URL?>/public/img/download modif.png" class="rounded float-right" >
                        <input type="text" class="form-control" placeholder="firstname">
                    </div>
                </div>
                <div class="form-row  mb-2">           
                    <div class="form-group col-md-6"> 
                        <img style="width: 15px;" src="<?=BASE_URL?>/public/img/download modif.png" class="rounded float-right" >              
                        <input type="email" class="form-control" placeholder="firstname">
                    </div>
                    <div class="form-group col-md-6">
                        <img style="width: 15px;" src="<?=BASE_URL?>/public/img/download modif.png" class="rounded float-right" >
                        <input type="text" class="form-control" placeholder="firstname">
                    </div>
                </div>
                <div class="form-row  mb-2">           
                    <div class="form-group col-md-6 ">
                    <img style="width: 15px;" src="<?=BASE_URL?>/public/img/download modif.png" class="rounded float-right" >
                        <input type="date" id="start"  min="1978-01-01" max="2020-12-31" name="trip-start" class="form-control"  placeholder="1234 Main St">
                    </div>
                    <div class="form-group col-md-6">
                        <img style="width: 15px;" src="<?=BASE_URL?>/public/img/download modif.png" class="rounded float-right" alt="<?=BASE_URL?>.">
                        <input type="text" class="form-control" placeholder="firstname">
                    </div>
                </div>
                
                <div class="form-group col-md-6 d-flex m-auto ">
                <select class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="form-group col-md-8 m-auto ">
                        <button type="submit" class="btn btn-light bg-dark col-md-12 mt-5 text-white ">Enregistrer</button>
                </div>
    
            </form>
        </div>
</div>
