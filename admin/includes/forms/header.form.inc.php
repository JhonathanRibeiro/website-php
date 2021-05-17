
<form class="form-card pt-4" onsubmit="return validate(0)">
    <div class="row justify-content-between text-left">
        <div class="form-group col-sm-6 flex-column d-flex"> 
        <label class="form-control-label px-1">Título da seção<span class="text-danger"> *</span></label> 
         <input class="inp-form" type="text" id="title" name="title" 
             value=""> 
        </div>
        
        <div class="form-group col-sm-6 flex-column d-flex"> 
        <label class="form-control-label px-1">Imagem<span class="text-danger"> *</span></label> 
          <input class="inp-form" type="text" id="bckgimage" name="bckgimage" 
           value=""> 
        </div>
    </div>

    <div class="row justify-content-between text-left">
        <div class="form-group col-sm-6 flex-column d-flex"> 
        <label class="form-control-label px-1">Logo<span class="text-danger"> *</span></label> 
            <input class="inp-form" type="text" id="logo" name="logo" 
             value=""> 
        </div>
    
    <div class="row justify-content-between text-left">
        <div class="form-group col-12 flex-column d-flex"> 
        <label class="form-control-label px-1">Decrição<span class="text-danger"> *</span></label>
            <input class="inp-form" type="text" id="description" name="description" 
             value=""> 
        </div>
    </div>
    
    <div class="row justify-content-end">
        <div class="form-group col-sm-6"> 
            <button class="nav-link" type="submit" class="btn-block btn-primary">Salvar</button> 
        </div>
    </div>
</form>