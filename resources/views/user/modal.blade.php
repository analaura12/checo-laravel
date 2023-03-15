<div class="modal fade" id="avaliable-{{ $est->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Avaliações do Estabelecimento</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @php
                if($est->id){
                    $evaluates = App\Models\EvaluateEstablishment::with(['User', 'Establishment'])->where('establishment_id', $est->id)->get(); 
                }
            @endphp
            <div class="modal-body">
                <section style="background-color: #f05642;">
                    <div class="container my-5 py-5">
                      <div class="row d-flex justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            @foreach ($evaluates as $evaluate)      
                            <div class="">
                              <div class="card-body p-4">
                                {{-- <h4 class="mb-0">Avaliações Recentes</h4>
                                <p class="fw-light mb-4 pb-2">Comentários deixados pelos clientes</p> --}}
                                <div class="d-flex flex-start">
                                  <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://cdn-icons-png.flaticon.com/512/6596/6596121.png" alt="avatar" width="60"
                                    height="60" />
                                  <div>
                                    <h6 class="fw-bold mb-1">{{$evaluate->user->name}}</h6>
                                    <div class="d-flex align-items-center mb-3">
                                      <p class="mb-0">
                                          <span class="badge bg-primary">Avaliação: {{$evaluate->evaluate_score}}</span>
                                        </p>
                                    </div>
                                    <p class="mb-0">
                                      <b>Mensagem:</b> {{$evaluate->description}}
                                      <br>
                                      <b>Data da Avaliação:</b> {{$evaluate->created_at->format('d/m/Y')}}
                                    </p>
                                  </div>
                                </div>
                              </div>
                    
                              <hr class="my-0" />
  
                            </div>
                            @endforeach
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        </div>
    </div>
</div>
