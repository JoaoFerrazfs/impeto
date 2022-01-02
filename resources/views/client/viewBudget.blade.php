@extends('layouts.managerMain')
@section('title','Impeto')
@section('content')


<div class="container mt-5">
    <form action="/pedido/confirmado" method="post">
        @csrf
        <fieldset class="border p-2 container">
            <legend style="color: white;" class="w-auto">Dados Pessoais</legend>


            <div class="col-md-10 container d-flex p-2 align-self-center ">
                <div class="input-group input-group-sm mb-3 mx-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome Completo</span>
                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Telefone</span>
                    <input type="text" name="phoneNumber" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"required>
                </div>

            </div>
            <div class="col-md-10 container d-flex p-2 align-self-center ">

                <div class="input-group input-group-sm mb-3 mx-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-sm">CEP</span>
                    <input type="text" name="CEP" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Estado</span>
                    <input type="text" name="state" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Cidade</span>
                    <input type="text" name="city" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Rua</span>
                    <input type="text" name="street" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nº</span>
                    <input type="text" name="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

            </div>
        </fieldset>

        <fieldset class="border p-2 mt-5">
            <legend style="color: white;" class="w-auto">Produtos</legend>
            <table class="table-light table ">
                <thead>
                    <tr class="table-secondary">
                        <th scope="col">Nome</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart as $value)
                    <tr>
                        <td>{{$value['name']}}</td>
                        <td>{{$value['price']}}</td>
                        <td>{{$value['quantity']}}</td>
                        <td>{{$value['quantity'] * $value['price'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot class="table-secondary">
                    <tr>
                        <td>Valor do Pedido </td>
                        <td> </td>
                        <td> </td>
                        <td>{{$amount}}</td>
                    </tr>
                </tfoot>
            </table>
        </fieldset>

        <fieldset class="border p-2 container mt-5">
            <legend style="color: white;" class="w-auto">Dados de Pagamento</legend>


            <div class="col-md-10 container d-flex p-2 align-self-center ">
                <div class="input-group input-group-sm mb-3 mx-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nº Cartão</span>
                    <input type="text" name="numberCard" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Nome impresso</span>
                    <input type="text" name="nameCard" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

            </div>
            <div class="col-md-10 container d-flex p-2 align-self-center ">

                <div class="input-group input-group-sm mb-3 mx-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Validade</span>
                    <input type="date" name="expiration" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3 mx-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">cvc</span>
                    <input type="text" name="cvc" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>


               

            </div>
        </fieldset>

        <div class="position-relative mt-5">
            <div class="position-absolute top-50 start-0">
                <a href="/carrinho/visualizar" class="btn btn-outline-info">Editar pedido</a>
            </div>

            <div class="position-absolute top-50 end-0">
                <button type="submit" class="btn btn-outline-success">Confirmar pedido</button>
            </div>

        </div>
    </form>
</div>





@endsection