@csrf
<input type="hidden" name="establishment_id" value="{{auth()->guard('establishment')->user()->id}}">
<div class="form-group">
    <label for="exampleFormControlInput1"  class="form-label">Categoria</label>
    <input type="text" class="form-control" name="category" id="exampleFormControlInput1" placeholder="Digite a categoria" required value="{{isset($product->category) ? $product->category : ''}}">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Nome do item</label>
    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Digite o nome do produto" required value="{{isset($product->name) ? $product->name : ''}}">
</div>
<div class="form-group">
    <label class="form-label">Código</label>
    <input type="text" class="form-control" name="code" placeholder="Digite o código do produto" required value="{{isset($product->code) ? $product->code : ''}}">
</div>
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Descrição do item</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Digite a descrição do produto" rows="2">{{isset($product->description) ? $product->description : ''}}</textarea>
</div>
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Restrições alimentares</label>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="font-size: 14px; color: rgb(94, 101, 118);" name="food_restriction">
        <option value="Sem restrições" selected>Sem restrições</option>
        <option value="Vegetariano">Vegetariano</option>
        <option value="Vegano">Vegano</option>
        <option value="Orgânico">Orgânico</option>
        <option value="Sem açúcar">Sem açúcar</option>
        <option value="Zero lactose">Zero lactose</option> 
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Serve quantas pessoas?</label>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="font-size: 14px; color: rgb(94, 101, 118);" name="number_people_served">
        <option value="Não se aplica" selected>Não se aplica</option>
        <option value="1 pessoa">1 pessoa</option>
        <option value="2 pessoas">2 pessoas</option>
        <option value="3 pessoas">3 pessoas</option>
        <option value="4 pessoas">4 pessoas</option>
    </select>
</div>  
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Preço</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o preço" name="price" required value="{{isset($product->price) ? $product->price : ''}}">
</div>
@if(isset($product->image))
<div class="form-group">
    <label for="">Imagem atual</label>
    <img src="data:image;base64,{{$product->image}}" alt="profile" width="120px"/>
    <input type="hidden"  name="image_old" value="{{$product->image}}">
    </div>
@endif
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Imagem do item</label><br>
    <input class="form-control" type="file" name="image" style="color: rgb(108, 117, 125);">
</div>
<input type="hidden" name="user_id" value="{{auth()->guard('establishment')->user()->id}}">