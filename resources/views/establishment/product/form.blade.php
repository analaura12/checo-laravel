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
        <option value="0" selected>Selecione uma opção</option>
        <option value="1">Vegetariano</option>
        <option value="2">Vegano</option>
        <option value="3">Orgânico</option>
        <option value="4">Sem açúcar</option>
        <option value="4">Zero lactose</option> 
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Serve quantas pessoas?</label>
    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="font-size: 14px; color: rgb(94, 101, 118);" name="number_people_served">
        <option value="0" selected>Não se aplica</option>
        <option value="1">1 pessoa</option>
        <option value="2">2 pessoas</option>
        <option value="3">3 pessoas</option>
        <option value="4">4 pessoas</option>
    </select>
</div>  
<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Preço</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o preço" name="price" required value="{{isset($product->price) ? $product->price : ''}}">
</div>

<div class="form-group">
    <label for="exampleFormControlInput1" class="form-label">Imagem do item</label><br>
    <input class="form-control" type="file" name="image" style="color: rgb(108, 117, 125);">
</div>

<input type="hidden" name="user_id" value="{{auth()->guard('establishment')->user()->id}}">