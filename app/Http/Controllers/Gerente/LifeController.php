<?php

namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use App\Models\Life;
use Illuminate\Http\Request;

class LifeController extends Controller
{

    public function edit(Life $life)
    {
        return view('admin.life.edit',compact('life'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        Life::findOrFail($id)->update($data);
        return redirect()->route('life.edit',$id)->withToastSuccess('Informações atualizadas!');
    }

}
