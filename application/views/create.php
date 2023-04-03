<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Formulario Creacion de Personas</h1>

        </div>
    </div>
    <?php echo form_open(''); ?>
    <div class="row">
        <form action="../controllers/persona.php" class="mt-4" method="POST">
            <div class="col-3" style="background-color: white;">
                <input id="name" type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Nombre">
            </div>
            <div class="col-3" style="background-color: white;">
                <input id="correo" type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Correo">
            </div>
            <div class="col-3" style="background-color: white;">
                <input id="tel" type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Telefono">
            </div>
            <div class="col-3" style="background-color: white;">
                <button class="btn btn-primary" onclick="create()">Guardar</button>
            </div>
        </form>
    <?php echo form_close(''); ?>
    </div>
    <hr>
    <div class="col-lg-12">
        <table class="table" id="tPersonas">
			<thead class="table-dark">
				<th>ID</th>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Telefono</th>
                <th>Accion</th>
                <th>Accion</th>
			</thead>
			<tbody>
				<td>23</td>
				<td>Freddy</td>
				<td>fred</td>
				<td>312408022</td>
                <td><button class="btn btn-warning">Editar</button></td>
                <td><button class="btn btn-danger">Eliminar</button></td>
			</tbody>
			</table>
		</div>
</div>

<script>

    lista=[]

    class Persona{
        id
        Nombre
        Correo
        telefono

        Persona(){

        }
    }

    function create(){
        n = document.getElementById('name').value
        c = document.getElementById('correo').value
        t = document.getElementById('tel').value
        p = new Persona()
        p.Nombre=n
        p.Correo=c
        p.telefono=t
        this.lista.push(p)
        console.log(lista)
        show()
    }

    function show(){
        tabla = document.getElementById('tPersonas')
        cuerpo="<thead class='table-dark'>"+
				"<th>ID</th>"+
				"<th>Nombre</th>"+
				"<th>Correo</th>"+
				"<th>Telefono</th>"+
                "<th>Accion</th>"+
                "<th>Accion</th>"+
			"</thead>"+
			"<tbody>"
        for(let i = 0;i<this.lista.length;i++){
            cuerpo+="<td>"+this.lista[i].id+"</td>"+"<td>"+this.lista[i].Nombre+"</td>"+"<td>"+this.lista[i].Correo+"</td>"+"<td>"+this.lista[i].telefono+"</td>"
            +"<td><button class='btn btn-warning' value=`${lista[i].id}` onclick='alert('hola')'>Editar</button></td><td><button class='btn btn-danger' value=`${lista[i].id}`>Eliminar</button></td>"
                
        }
        cuerpo+="</tbody>"
        tabla.innerHTML=cuerpo
    }

    function put(){
        n = document.getElementById('name').value
        c = document.getElementById('correo').value
        t = document.getElementById('tel').value
    }

    function deletePerson(){

    }
</script>