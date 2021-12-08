@csrf

<style>
    #id::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }

    input[type="date"]:before {
        color: transparent;
        background: none;
        display: block;
        font-family: 'FontAwesome';
        content: '\f073';
        width: 15px;
        height: 20px;
        position: absolute;
        top: 7px;
        right: 6px;
        color: #999;
    }

</style>

<input type="hidden" name="establishment_id" value="{{ $establishment_id }}">
<div class="tab-content" id="main_form">
    <div class="tab-pane active" role="tabpanel" id="step1">
        <h4 class="text-center">Selecione o produto</h4>
        <div class="row">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            <label>
                                <input type="radio" name="product_id" value="{{ $product->id }}"
                                    class="card-input-element" />
                                <div class="panel panel-default card-input">
                                    <div class="card" style="width: 14rem;">
                                        <img class="card-img-top" src="data:image;base64,{{ $product->image }}"
                                            alt="" />
                                        <div class="card-body">
                                            <h6 class="card-title">
                                                <i class="fas fa-utensils"></i> {{ $product->name }}
                                            </h6>
                                            <p class="card-text">{{ $product->description }}
                                            <p>
                                            <p class="card-price">R${{ $product->price }}
                                            <p>
                                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <ul class="list-inline pull-right">
            <li><button type="button" class="default-btn next-step">Próximo</button></li>
        </ul>
    </div>
    <div class="tab-pane" role="tabpanel" id="step2">
        <h4 class="text-center">Selecione a mesa</h4>
        <div class="row">
            @foreach ($tables as $table)
                <div class="col-md-4 col-lg-4 col-sm-4">
                    <label>
                        <input type="radio" name="table_id" value="{{ $table->id }}" class="card-input-element" />
                        <div class="panel panel-default card-input">
                            <div class="card" style="width: 14rem;">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-chair"></i> Mesa #{{ $table->number }}
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Número de cadeiras:
                                        {{ $table->number_of_chairs }}</h6>
                                    <p class="card-text">
                                        {{ $table->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </label>
                </div>
            @endforeach
        </div>
        <ul class="list-inline pull-right">
            <li><button type="button" class="default-btn prev-step">Voltar</button></li>
            {{-- <li><button type="button" class="default-btn next-step skip-btn">Pular</button></li> --}}
            <li><button type="button" class="default-btn next-step">Próximo</button></li>
        </ul>
    </div>
    <div class="tab-pane" role="tabpanel" id="step3">
        <h4 class="text-center">Informações Adicionais</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Data *</label>
                    <input class="form-control" type="date" id="data" name="date" placeholder="" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Hora</label>
                    <input class="form-control" type="time" name="hour" placeholder="" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Observações</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="observation"
                        rows="3"></textarea>
                </div>
            </div>
        </div>
        <ul class="list-inline pull-right">
            <li><button type="button" class="default-btn prev-step">Voltar</button></li>
            <li><button type="sybmit" class="default-btn next-step">Salvar</button></li>
        </ul>
    </div>
    <div class="clearfix"></div>
</div>

<script>
    var today = new Date().toISOString().split('T')[0];
    document.getElementsByName("date")[0].setAttribute('min', today);
</script>
