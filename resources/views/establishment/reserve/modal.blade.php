<div class="modal fade" id="exampleModal-{{$res->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Número da Reserva: #{{$res->id}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4 class=""><strong> Dados gerais</strong></h4>
          <br>
          <p>Data: {{date('d/m/Y', strtotime($res->date))}}</p>
          <p>Hora: {{$res->hour}}</p>
          <p>Observação: {{$res->observation}}</p>
          <hr>

          <h4 class=""><strong> Dados do cliente</strong></h4>
          <br>
          <p>Nome do cliente: {{$res->User->name}}</p>
          <p>E-mail do cliente: {{$res->User->email}}</p>
          <p>Celular do cliente: <span class="mask_cellphone_with_ddd">{{$res->User->cellphone}}</span></p>
          <hr>

          <h4 class=""><strong> Dados da mesa</strong></h4>
          <br>
          <p>Número: {{$res->Table->number}}</p>
          <p>Descrição: {{$res->Table->description}}</p>
          <hr>

          <h4 class=""><strong> Dados do produto</strong></h4>
          <br>
          <p>Nome: {{$res->Product->name}}</p>
          <p>Preço: {{$res->Product->price}}</p>
          <hr>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          {{--  <button type="button" class="btn btn-primary">Save changes</button>  --}}
        </div>
      </div>
    </div>
</div>