@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Import - CV</h4>
{{--                <h6>Create new product Category</h6>--}}
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Matricule</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Prénom</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                    <div class="form-group">
                        <label>Sexe</label>
                        <select class="form-control" name="sexe">
                            <option value="M">M</option>
                            <option value="F">F</option>
                        </select>
                    </div>
                    </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                        <label>Services</label>
                        <select class="form-control" name="sexe">
                            <option value="cifp">CIFP</option>
                            <option value="acct">ACCT</option>
                            <option value="acct">PGT</option>
                            <option value="acct">RGD</option>
                            <option value="acct">TR</option>
                            <option value="acct">RP</option>
                            <option value="acct">DNTCP</option>
                        </select>
                    </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Grade</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                        <div class="form-group">
                            <label>Corps</label>
                            <input type="text">
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label> Fichier </label>
                            <div class="image-upload">
                                <input type="file">
                                <div class="image-uploads">
                                    <img src="assets/img/icons/upload.svg" alt="img">
                                    <h4>Drag and drop a file to upload</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="javascript:void(0);" class="btn btn-submit me-2">Charger</a>
                        <a href="categorylist.html" class="btn btn-cancel">Quitter</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
