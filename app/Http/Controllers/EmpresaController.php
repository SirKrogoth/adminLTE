<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;
use Symfony\Component\HttpFoundation\Response;

class EmpresaController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request) : View
    {
        $this->validaTipo($request->tipo);

        $empresas = Empresa::todasPorTipo($request->tipo);

        return view('empresa.index',[
            'empresas' => $empresas,
            'tipo' => $request->tipo
        ]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View
     */
    public function create(Request $request) : View
    {
        $this->validaTipo($request->tipo);

        return view('empresa.create', [
            'tipo' => $request->tipo
        ]);
    }

    /**
     * Undocumented function
     *
     * @param EmpresaRequest $request
     * @return Response
     */
    public function store(EmpresaRequest $request) : Response
    {
        $tipo = $request->tipo;

        $this->validaTipo($request->tipo);

        $empresa = Empresa::create($request->all());

        return redirect()->route('empresas.show', $empresa->id);
    }

    /**
     * Undocumented function
     *
     * @param Empresa $empresa
     * @return View
     */
    public function show(Empresa $empresa): View
    {
        return view('empresa.show', compact('empresa'));
    }

    /**
     * Undocumented function
     *
     * @param Empresa $empresa
     * @return View
     */
    public function edit(Empresa $empresa) : View
    {
        return view('empresa.edit', compact('empresa'));
    }

    /**
     * Undocumented function
     *
     * @param EmpresaRequest $request
     * @param Empresa $empresa
     * @return Response
     */
    public function update(EmpresaRequest $request, Empresa $empresa) : Response
    {
        $empresa->update($request->all());

        return redirect()->route('empresas.show', $empresa);
    }

    /**
     * Undocumented function
     *
     * @param Empresa $empresa
     * @param Request $request
     * @return Response
     */
    public function destroy(Empresa $empresa, Request $request) : Response
    {
        $this->validaTipo($request->tipo);

        $empresa->delete();

        return redirect()->route('empresas.index', ['tipo'=>$request->tipo]);
    }

    /**
     * Verifica o tipo, se ?? cliente ou fornecedor
     *
     * @param string $tipo
     * @return void
     */
    private function validaTipo(string $tipo) : void
    {
        if($tipo !== 'cliente' && $tipo !== 'fornecedor')
        {
            abort(404);
        }
    }
}
