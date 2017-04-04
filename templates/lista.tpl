
<div class="table-responsive" >
        <table class="table table-striped">
          <thead>
            <tr>          
              <th>Codigo</th>
              <th>Descripcion</th>             
              <th>Cantidad</th>
              <th>Campaña</th>
              <th></th>
            </tr>
          </thead>
          
          <tbody>         
            {foreach from=$piezas item=pieza}
            <tr>
              <td>{$pieza['codigo']}</td>
              <td>{$pieza['descripcion']}</td>
              <td>{$pieza['cantidad']}</td>
              <td>{$pieza['codigoc']}</td>
              <td><a href="index.php?action=ver_pieza&idpieza='{$pieza[id]}'"><i class="fa fa-info fa-2x" aria-hidden="true"></i></a></td>
            </tr>
            {/foreach}  
            
          </tbody>
        </table>
 </div>
