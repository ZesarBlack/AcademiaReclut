<div id="central-content">
  <form>
  <div class="form-group row mt-5">
      <label for="Direc" class="col-sm-2 col-form-label">Dirección</label>
      <div class="col-sm-4">
        <select id="Direc" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
      </div>
      <label for="DirecF" class="col-sm-2 col-form-label">Dirección Funcional</label>
      <div class="col-sm-4">
        <select id="DirecF" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
      </div>
  </div>
  <div class="form-group row mt-0">
    <label for="Depto" class="col-sm-2 col-form-label">Departamento</label>
    <div class="col-sm-4">
      <select id="Depto" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
    </div>
    <label for="DeptoF" class="col-sm-2 col-form-label">Depto Funcional</label>
    <div class="col-sm-4">
      <select id="DeptoF" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
    </div>
  </div>
  <div class="form-group row mt-4">
      <label for="act" class="col-sm-2 col-form-label">Actividad</label>
      <div class="col-sm-4">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Operativo" value="option1">
          <label class="form-check-label" for="Operativo">Operativo</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Admin" value="option2">
          <label class="form-check-label" for="Admin">Administrativo</label>
        </div>
      </div>
      <label for="contrato" class="col-sm-2 col-form-label">Contrato</label>
      <div class="col-sm-4">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="Confianza" value="option1">
          <label class="form-check-label" for="Confianza">Confianza</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="BS" value="option2">
          <label class="form-check-label" for="BS">Base Sindicalizado</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions2" id="BNS" value="option2">
          <label class="form-check-label" for="BNS">Base No Sindicalizado</label>
        </div>
      </div>
  </div>
  <div class="form-group row mt-4">
      <label for="act" class="col-sm-2 col-form-label">Sus funciones en la SSPyTM</label>
      <div class="col-sm-4">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="SIF" value="option1">
          <label class="form-check-label" for="SIF">SI</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions3" id="NOF" value="option2">
          <label class="form-check-label" for="NOF">NO</label>
        </div>
      </div>
  </div>
  <div class="form-group row mt-0">
    <label for="Catpues" class="col-sm-2 col-form-label">Categoría/Puesto</label>
    <div class="col-sm-4">
      <select id="Catpues" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
    </div>
    <label for="Turno" class="col-sm-2 col-form-label">Turno</label>
    <div class="col-sm-4">
      <select id="Turno" class="form-control">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
    </div>
  </div>
  <div class="form-group row mt-4">
      <label for="desfun" class="col-sm-2 col-form-label">Descripción de Función</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="desfun">
      </div>
      <label for="Horario" class="col-sm-2 col-form-label">Horario</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="Horario">
      </div>
  </div>
  <div class="form-group row mt-4">
      <label for="Sbruto" class="col-sm-2 col-form-label">Sueldo Bruto</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="Sbruto">
      </div>
      <label for="Fing" class="col-sm-2 col-form-label">Fecha Ingreso</label>
      <div class="col-sm-4">
        <input type="date" class="form-control" id="Fing">
      </div>
  </div>
  <div class="form-group">
    <label for="Observaciones">Observaciones</label>
    <textarea class="form-control" id="Observaciones" rows="3"></textarea>
  </div>

<div class="text-right mt-4">
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
