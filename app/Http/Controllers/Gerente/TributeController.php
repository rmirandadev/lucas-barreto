<?php

namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use App\Models\Tribute;
use Illuminate\Http\Request;

class TributeController extends Controller
{

    public function edit(Tribute $tribute)
    {
        return view('admin.tribute.edit',compact('tribute'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        Tribute::findOrFail($id)->update($data);
        return redirect()->route('tribute.edit',$id)->withToastSuccess('Informações atualizadas!');
    }

}
