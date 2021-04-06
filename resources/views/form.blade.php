<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h2>Cadastro de Empresários</h2>
        </div>
        <div class="card-body">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('form')}}">
                @csrf
                <div class="form-group">
                    <label for="">Nome Completo</label>
                    <input type="text" name="fullname" class="@error('fullname') is-invalid @enderror form-control">
                    @error('fullname')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="">Celular</label>
                        <input type="text" id="title" name="phone" class="@error('phone') is-invalid @enderror form-control">
                        @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="dropdown form-group col-8">
                        <label for="">Estado / UF</label>
                        <select class="dropdown-menus" aria-labelledby="dropdownMenuButton" name="UF" selected="phone">
                            <option class="dropdown-item" name="acre" value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                        @error('UF')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select class="dropdown-menus" aria-labelledby="dropdownMenuButton" name="city" selected="phone">
                            <option class="dropdown-item" name="riobranco" value="riobranco" >Rio Branco</option>
                            <option class="dropdown-item" name="macapa" value="macapa" >Macapa</option>
                            <option class="dropdown-item" name="belem" value="belem" >Belem</option>
                        </select>
                        @error('city')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        <select class="dropdown-menus" aria-labelledby="dropdownMenuButton" name="bus_father" selected="phone">
                            <option class="dropdown-item" name="bus_father" value="example" >Pai Empresarial</option>
                        </select>
                        @error('bus_father')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
