@csrf
<div class="form-group">
    <label for="tipo_viajero" >1.- Que tipo de viajero te consideras que eres?</label>
    <div class="col-sm-12">
        <select class="custom-select select2" id="tipo_viajero" name="tipo_viajero" multiple="multiple">
                <option value="D">Aventurero</option>
                <option value="T">Cultural</option>
                <option value="F">Fiestero</option>
        </select>
        <span id="tipo_viajeroError" class="alert-message"></span>
    </div>
</div>
<div class="form-group">
    <label for="actividad" >2.- Estás de viaje por vacaciones, es tu primer día en tu destino, tu:</label>
    <div class="col-sm-12">
        <select class="custom-select select2" id="actividad" name="actividad" multiple="multiple">
                <option value="D">Buscas salir de la ciudad</option>
                <option value="T">Buscas opciones en la ciudad</option>
        </select>
        <span id="actividadError" class="alert-message"></span>
    </div>
</div>
<div class="form-group">
    <label for="clima" >3.- Una vez que decidiste que hacer, volteas al cielo y una brisa de aire:</label>
    <div class="col-sm-12">
        <select class="custom-select select2" id="clima" name="clima" multiple="multiple">
                <option value="D">Calurosa</option>
                <option value="T">Fria</option>
                <option value="U">Humeda</option>
                <option value="U">Seca</option>
        </select>
        <span id="climaError" class="alert-message"></span>
    </div>
</div>
<div class="form-group">
    <label for="comida" >4.- Estás cansado y hambriento, se te antoja:</label>
    <div class="col-sm-12">
        <select class="custom-select select2" id="comida" name="comida" multiple="multiple">
                <option value="D">Un platillo de mar, fresco y sabrosor</option>
                <option value="T">Un delicioso plato de comida típica </option>
                <option value="U">Un vistoso plato culinario de un muy buen restaurante</option>
        </select>
        <span id="comidaError" class="alert-message"></span>
    </div>
</div>
<div class="form-group">
    <label for="noche" >5.- Comienza a atardecer, vuelves a tu lugar de hospedaje a cambiarte y decides el plan para el resto del día, tienes ganas de:</label>
    <div class="col-sm-12">
        <select class="custom-select select2" id="noche" name="noche" multiple="multiple">
                <option value="D">Disfrutar al máximo la vida nocturna que ofrece el lugar</option>
                <option value="T">Tomar un paseo por el centro de la ciudad </option>
        </select>
        <span id="nocheError" class="alert-message"></span>
    </div>
</div>
<div class="form-group">
    <label for="segundo_dia" >6.- La noche anterior estuvo excelente, despiertas y mientras desayunas planeas si hoy irás a:</label>
    <div class="col-sm-12">
        <select class="custom-select select2" id="segundo_dia" name="segundo_dia" multiple="multiple">
                <option value="P">Pueblo mágico</option>
                <option value="S">Sitio arqueológico</option>
            </select>
        <span id="segundo_diaError" class="alert-message"></span>
    </div>
</div>
