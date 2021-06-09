<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Pagination\AbstractPaginator;

class Empresa extends Model
{
    //O SoftDelete faz com que nao somente o registro seja apagado, mas como também os seus filhos.
    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = ['tipo', 'documento', 'ie_rg', 'telefone', 'celular', 'cep', 'estado', 'nome', 'razao_social','nome_contato','email','logradouro','cidade','bairro','observacao'];

    /**
     * @param string $tipo
     * @param integer $quantidade
     * @param AbstractPaginator
     */
    public static function todasPorTipo(string $tipo, int $quantidade = 10): AbstractPaginator
    {
        return self::where('tipo', $tipo)->paginate($quantidade);
    }
}
