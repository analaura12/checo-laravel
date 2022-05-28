<div class="modal fade" id="avaliable-{{ $res->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Avaliar Estabelecimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('reserve.avaliable')}}" method="POST">
                    @csrf
                    <input type="hidden" name="evaluate[user_id]" value={{$res->user_id}}>
                    <input type="hidden" name="evaluate[establishment_id]" value={{$res->establishment_id}}>
                    <input type="hidden" name="evaluate[evaluate_score]" id="classificacao">
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar com grupos de botões">
                        <label>Avalie o estabelecimento</label>
                        <div class="btn-group mr-2" role="group" aria-label="Primeiro grupo">
                            <button type="button" id="btn1" class="btn btn-secondary" onclick="setNumber(1)">1</button>
                            <button type="button" id="btn2" class="btn btn-secondary" onclick="setNumber(2)">2</button>
                            <button type="button" id="btn3" class="btn btn-secondary" onclick="setNumber(3)">3</button>
                            <button type="button" id="btn4" class="btn btn-secondary" onclick="setNumber(4)">5</button>
                            <button type="button" id="btn5" class="btn btn-secondary" onclick="setNumber(5)">6</button>
                            <button type="button" id="btn6" class="btn btn-secondary" onclick="setNumber(6)">7</button>
                            <button type="button" id="btn7" class="btn btn-secondary" onclick="setNumber(7)">8</button>
                            <button type="button" id="btn8" class="btn btn-secondary" onclick="setNumber(8)">9</button>
                        </div>
                    </div>
                    <div class="form-group mt-2">
                        <label for="exampleFormControlTextarea1">Adicione um comentário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="evaluate[description]" rows="3"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button class="btn btn-primary" type="submit">Avaliar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
