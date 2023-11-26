 @extends('layouts.master')
@section('content')
<div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Liste des CV</h4>
            </div>
        </div>
 <div class="table-responsive">
     <table class="table  datanew">
         <thead>
             <tr>
                 <th>
                     <label class="checkboxs">
                         <input type="checkbox" id="select-all">
                         <span class="checkmarks"></span>
                     </label>
                 </th>
                 <th>Matricule</th>
                 <th>Prénoms</th>
                 <th>Nom </th>
                 <th>Sexe</th>
                 <th>Services</th>
                 <th>Grade</th>
                 <th>Corps</th>
                 <th>Action</th>
             </tr>
         </thead>
 </div>
 
</div>

@endsection
