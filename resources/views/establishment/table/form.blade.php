@csrf
<input type="hidden" name="establishment_id" value="{{auth()->guard('establishment')->user()->id}}">
<div class="form-group">
    <label for="">Número da mesa</label>
    <input type="number" class="form-control" min="0" step="1" name="number" value="{{isset($table->number) ? $table->number : ''}}" required>
</div>
<div class="form-group">
    <label for="">Número de cadeiras</label>
    <input type="number" class="form-control" min="0" step="1" name="number_of_chairs"  value="{{isset($table->number_of_chairs) ? $table->number_of_chairs : ''}}"  required>
</div>
<div class="form-group">
    <label for="">Descrição</label>
    <textarea class="form-control" id="" rows="3" name="description">{{isset($table->description) ? $table->description : ''}}</textarea>
</div>

<input type="hidden" name="user_id" value="{{auth()->guard('establishment')->user()->id}}">