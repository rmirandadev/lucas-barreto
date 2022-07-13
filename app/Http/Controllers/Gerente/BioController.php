<?php

namespace App\Http\Controllers\Gerente;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use Illuminate\Http\Request;

class BioController extends Controller
{

    public function edit(Bio $bio)
    {
        return view('admin.bio.edit',compact('bio'));
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        Bio::findOrFail($id)->update($data);
        return redirect()->route('bio.edit',$id)->withToastSuccess('Biografia atualizada!');
    }

}
