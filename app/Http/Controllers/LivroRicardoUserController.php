<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LivroRicardoUserController extends Controller
{
    public function form()
    {
        $this->authorize('admin');
        return view('livros-ricardo.users.novoadmin');
    }

    public function register(Request $request)
    {   
        $this->authorize('admin');
        $request->validate([
            'codpes_text' => 'nullable|integer|codpes',
            'codepes_select' => 'nullable|integer|codpes',

        ]);
        $codpes = (isset($request->codpes_text)) ? $request->codpes_text : $request->codepes_select; 
        
        if(is_null($codpes) || strlen($codpes) == 0){
            request()->session()->flash('alert-danger','Insira o número usp ou selecione um usuário');
        }
        else{

            $user = User::where('codpes',$codpes)->first();
            if(!$user){
                request()->session()->flash('alert-danger',"Usuário {$codpes} não existe.");
                return redirect("/livros-ricardo/novoadmin/");
            } 
            
            $user->codpes = $codpes;
            $user->email  = \Uspdev\Replicado\Pessoa::email($codpes);
            $user->name   = \Uspdev\Replicado\Pessoa::nomeCompleto($codpes);
            $user->is_admin = TRUE;
            $user->save();
            request()->session()->flash('alert-success',"{$user->name} agora é admin!");
        }
        return redirect("/livros-ricardo/novoadmin/");
    }
}
