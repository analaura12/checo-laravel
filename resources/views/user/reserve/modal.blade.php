<div class="modal fade" id="avaliable-{{ $res->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Avalie Estabelecimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert" id="successMsg" style="display: none">
                    Avaliação registrada com sucesso!
                </div>
                @csrf
                <input type="hidden" value={{$res->user_id}} id="user_id">
                <input type="hidden" value={{$res->establishment_id}} id="establishment_id">
                <input type="hidden" id="score">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar com grupos de botões">
                    <div class="btn-group mr-2" role="group" aria-label="Primeiro grupo">
                        <button type="button" id="btn1" class="btn btn-secondary" onclick="setNumber(1)">1</button>
                        <button type="button" id="btn2" class="btn btn-secondary" onclick="setNumber(2)">2</button>
                        <button type="button" id="btn3" class="btn btn-secondary" onclick="setNumber(3)">3</button>
                        <button type="button" id="btn4" class="btn btn-secondary" onclick="setNumber(4)">4</button>
                        <button type="button" id="btn4" class="btn btn-secondary" onclick="setNumber(5)">5</button>
                        <button type="button" id="btn5" class="btn btn-secondary" onclick="setNumber(6)">6</button>
                        <button type="button" id="btn6" class="btn btn-secondary" onclick="setNumber(7)">7</button>
                        <button type="button" id="btn7" class="btn btn-secondary" onclick="setNumber(8)">8</button>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleFormControlTextarea1">Adicione um comentário</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button class="btn btn-primary" type="submit" onclick="submit()">Avaliar</button>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script>
    function setNumber(number){
        $("#score").val(number);
    }

    function submit(){
        var host = "{{URL::to('/')}}";  
        var user_id = document.getElementById("user_id").value;
        var establishment_id = document.getElementById("establishment_id").value;
        var description = document.getElementById("description").value;
        var score = document.getElementById("score").value;

        $.ajax({
            url: host+"/reserve/avaliable",
            type:"POST",
            data:{
                "_token": "{{ csrf_token() }}",
                user_id:user_id, 
                establishment_id:establishment_id, 
                description:description,
                evaluate_score:  score
            },
            success:function(response){
                $('#successMsg').show();
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            },
        });
    }
</script>