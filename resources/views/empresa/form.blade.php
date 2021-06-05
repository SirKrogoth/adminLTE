@csrf

<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input value="{{ old('nome', @$empresa->nome) }}" type="text" id="nome" name="nome" maxlength="255" class="form-control @error('nome') is-invalid @enderror">
        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="razao_social" class="col-form-label col-sm-2 required">Razão Social</label>
    <div class="col-sm-10">
        <input value="{{ old('razao_social', @$empresa->razao_social) }}" type="text" name="razao_social" id="razao_social" maxlength="255" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="documento" class="col-form-label col-sm-2 required">Documento*</label>
    <div class="col-sm-10">
        <input value="{{ old('documento', @$empresa->documento) }}" type="text" name="documento" id="documento" maxlength="18" class="cpf_cnpj form-control" required >
    </div>
</div>
<div class="form-group row">
    <label for="ie_rg" class="col-form-label col-sm-2 required">IE/RG</label>
    <div class="col-sm-10">
        <input value="{{ old('ie_rg', @$empresa->ie_rg) }}" type="text" name="ie_rg" id="ie_rg" maxlength="12" class="form-control">
    </div>
</div>
<div id="cliente" class="form-group row">
    <label for="nome_contato" class="col-form-label col-sm-2 required">Nome Contato*</label>
    <div class="col-sm-10">
        <input value="{{ old('nome_contato', @$empresa->nome_contato) }}" type="text" name="nome_contato" id="nome_contato" maxlength="255" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="celular" class="col-form-label col-sm-2 required">Celular*</label>
    <div class="col-sm-10">
        <input type="text" value="{{ old('celular', @$empresa->celular) }}" name="celular" id="celular" maxlength="15" class="celular form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-form-label col-sm-2">Email</label>
    <div class="col-sm-10">
        <input value="{{ old('email', @$empresa->email) }}" type="text" name="email" id="email" maxlength="100" class="form-control">
    </div>
</div>
<div class="form-group row">
    <label for="telefone" class="col-form-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input value="{{ old('telefone', @$empresa->telefone) }}" type="text" name="telefone" id="telefone" maxlength="15" class="telefone form-control">
    </div>
</div>
<div class="form-group row">
    <label for="cep" class="col-form-label col-sm-2">Cep*</label>
    <div class="col-sm-10">
        <input value="{{ old('cep', @$empresa->cep) }}" type="text" name="cep" id="cep" maxlength="9" class="cep form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="logradouro" class="col-form-label col-sm-2">logradouro*</label>
    <div class="col-sm-10">
        <input value="{{ old('logradouro', @$empresa->logradouro) }}" type="text" name="logradouro" id="logradouro" maxlength="150" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="bairro" class="col-form-label col-sm-2">Bairro*</label>
    <div class="col-sm-10">
        <input value="{{ old('bairro', @$empresa->bairro) }}" type="text" name="bairro" id="bairro" maxlength="150" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="cidade" class="col-form-label col-sm-2">Cidade*</label>
    <div class="col-sm-10">
        <input value="{{ old('cidade', @$empresa->cidade) }}" type="text" name="cidade" id="cidade" maxlength="100" class= "form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="estado" class="col-form-label col-sm-2">Estado*</label>
    <div class="col-sm-10">
        <input value="{{ old('estado', @$empresa->estado) }}" type="text" name="estado" id="estado" maxlength="2" class="form-control" required>
    </div>
</div>
<div class="form-group row">
    <label for="observacao" class="col-form-label col-sm-2">Observacao</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$empresa->observacao) }}" type="text" name="observacao" id="observacao" maxlength="500" class="form-control">
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Novo</button>
