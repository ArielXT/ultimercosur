<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=Producto::paginate(5);
        return view('producto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'Foto'=>'required|max:1000|mimes:jpeg,png,jpg',
            'Nombre'=>'required|string|max:100',
            'Tipo'=>'required|string|max:100',
            'Precio'=>'required|numeric',
            'Descripcion'=>'required|string|max:1000',
            'idpais'=>'required|string|max:100',
            'idpais2'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido',
                'Foto.required'=>'La foto es requerida'
        ];
        
        $this->validate($request, $campos, $mensaje);

        $datosProducto = $request->except('_token');

        if($request->hasFile('Foto')){
            $datosProducto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Producto::insert($datosProducto);   
        //return response()->json($datosProducto);
        return redirect('producto')->with('mensaje','Producto agregado con exito!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto = producto::findorFail($id);
        return view('producto.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos = [            
            'Nombre'=>'required|string|max:100',
            'Tipo'=>'required|string|max:100',
            'Precio'=>'required|numeric',
            'Descripcion'=>'required|string|max:1000',
            'idpais'=>'required|string|max:100',
            'idpais2'=>'required|string|max:100',
        ];
        $mensaje=[
                'required'=>'El :attribute es requerido',
        ];
        
        if($request->hasFile('Foto')){
            $campos = ['Foto'=>'required|max:1000|mimes:jpeg,png,jpg',];
            $mensaje=['Foto.required'=>'La foto es requerida'];
        }

        $this->validate($request, $campos, $mensaje);

        $datosProducto = $request->except(['_token','_method']);
        
        if($request->hasFile('Foto')){
            $producto = producto::findorFail($id);
            Storage::delete(['public/'.$producto->foto]);
            $datosProducto['Foto']=$request->file('Foto')->store('uploads','public');
        }

        Producto::where('id','=',$id)->update($datosProducto);
        $producto = producto::findorFail($id);
        //return view('producto.edit', compact('producto'));
        return redirect('producto')->with('mensaje','Producto Editado Exitosamente');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = producto::findorFail($id);
        if(Storage::delete('public/'.$producto->foto)){
            Producto::destroy($id);
        }

        
        return redirect('producto')->with('mensaje','Producto Borrado');
    }
}
