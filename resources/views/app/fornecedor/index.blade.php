<h3>Fornecedor</h3>


@php
    // comentário padrão
    echo "Dentro do bloco PHP<br>";
    // echo count($fornecedores);
@endphp

{{-- Fica o comentário --}}
{{-- {{'Dentro do bloco BLADE'}}
<br> --}}

{{-- @dd($fornecedores) --}}

{{-- {{count($fornecedores)}}
<br> --}}

{{-- @dd($fornecedores2) --}}

<br>
<br>
<br>

@foreach($fornecedores2 as $indice => $fornecedor)
    {{-- @dd($loop) --}}

    Index: {{$loop->iteration}}
    <br>
    Fornecedor: {{$fornecedor['nome']}}
    <br>

    @if($loop->first)
        Primeira interação 
    @endif

    @if($loop->last)
        Última interação 
        <br>
    @endif
    Total {{$loop->count}}
    <hr>
@endforeach

<br>
<br>
<br>

{{-- Escapar tag blade --}}
@foreach($fornecedores2 as $fornecedor)
    Fornecedor: @{{$fornecedor['nome']}}
    <hr>
@endforeach

<br>
<br>
<br>

@forelse($fornecedores2 as $key => $fornecedor)
    Fornecedor: {{$fornecedor['nome']}}
    <hr>
@empty
    Não existem fornecedores cadastrados
@endforelse

<br>
<br>
<br>

@isset($fornecedores2)
    Fornecedor: {{$fornecedores2[0]['nome']}}
    <br>
    Status: {{$fornecedores2[0]['status']}}
    <br>
    {{-- evitar uma quebra de código se algo não por iniciado --}}
    CNPJ: {{$fornecedores2[0]['cnpj'] ?? 'Dado não foi preenchido'}}
    <br>
    Telefone: {{$fornecedores2[0]['ddd'] ?? ''}} {{$fornecedores2[0]['telefone'] ?? ''}} 
    <br>
    @switch($fornecedores2[0]['ddd'])
        @case ('11')
            São Paulo - SP 
            @break
        @case ('12')
            Uma cidade legal - MT
            @break
        @case ('13')
            Estadinho cidade - BH 
            @break
        @default
            Estado não identificado
    @endswitch
@endisset 

<br>
<br>
<br>

@for($i = 0; $i < 10; $i++)
    {{$i}} <br>
@endfor

<br>
<br>
<br>

@for($i = 0; isset($fornecedores2[$i]); $i++)
    Fornecedor: {{$fornecedores2[$i]['nome']}} <br><hr>
@endfor
    
<br>
<br>
<br>
    
@php $i = 0 @endphp
@while(isset($fornecedores2[$i]))    
    Fornecedor: {{$fornecedores2[$i]['nome']}} <br><hr>
    @php $i++ @endphp
@endwhile

{{-- @isset($fornecedores2)
    Fornecedor: {{$fornecedores2[0]['nome']}}
    <br>
    Status: {{$fornecedores2[0]['status']}}
    <br>
    @empty($fornecedores2[0]['cnpj'])
        CNPJ do índice 0 Vazio
        <br>
    @endempty
    CNPJ: {{$fornecedores2[0]['cnpj']}}
    <br>
    <br>
    Fornecedor: {{$fornecedores2[1]['nome']}}
    <br>
    Status: {{$fornecedores2[1]['status']}}
    <br>
    @isset($fornecedores2[1]['cnpj'])
        CNPJ: {{$fornecedores2[1]['cnpj']}}
        <br>
    @endisset
@endisset  --}}

{{-- Fornecedor: {{$fornecedores2[0]['nome']}}
<br>
Status: {{$fornecedores2[0]['status']}}
<br> --}}

{{-- @if(!($fornecedores2[0]['status'] == "S"))
    Fornecedor Inativo
    <br>
@endif

@unless($fornecedores2[0]['status'] == "S")
    Fornecedor Inativo
    <br>
@endunless --}}

{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Alguns fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Vários Fornecedores</h3>
@else
    <h3>Nenhum fornecedor</h3>
@endif --}}

