<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Psy\debug;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            'fornecedor 1', 
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1',
            'fornecedor 1'
        ];

        $fornecedores2 = [
            0 => [
                'nome' => 'Fornecedor Legal',
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '12',
                'telefone' => '123-4321'
            ],
            1 => [    
                'nome' => 'Fornecedor Mais ou menos',
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '11',
                'telefone' => '123-4321'
            ],
            2 => [    
                'nome' => 'Fornecedor Chato',
                'status' => 'N',
                'cnpj' => '',
                'ddd' => '13',
                'telefone' => '78233-431'
            ]
        ];

        // $msg = isset($fornecedores2[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        // echo $msg;

        return view('app.fornecedor.index', compact('fornecedores', 'fornecedores2'));
        // return view('app.fornecedor.index');
    }
}
