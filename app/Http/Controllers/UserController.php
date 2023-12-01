<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use App\Models\Pelanggan;
use DB;
Use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;



class UserController extends Controller
{
    //
    public function index(){
        $user = DB::table('users')->get();
        return view('admin.user.index', compact('user'));
    }

    public function show(){
        // fungsi berhasil atau tidaknya masuk ke admin
        // $pelanggan = DB::table('pelanggan')->get();
        $user =  User::findOrFail(Auth::id());

        // klo berhasil masuk ke view
        return view('admin.user.profile', compact('user'));
    }


    public function update(Request $request, $id){
        request()->validate([
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email|unique:users,email, '.$id.',id',
            'old_password' => 'nullable|string',
            'password' => 'nullable|required_with:old_password|string|confirmed|min:6'
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->filled('old_password')){
            if(Hash::check($request->old_password, $user->password)){
                $user->update([
                    'password' => Hash::make($request->password)
                ]);
            } else {
                return back()
                ->withErrors(['old_password' => __('Tolong Periksa Password')])
                ->withInput();
            }
        }
        if(request()->hasFile('foto')){
            if($user->foto && file_exists(storage_path('app/public/fotos/' .$user->foto))){
                Storage::delete('app/public/fotos'.$user->foto);
            }
            $file = $request->file('foto');
            $fileName = $file->hashName().'.'.$file->getClientOriginalExtension();
            $request->foto->move(storage_path('app/public/fotos'), $fileName);
            $user->foto = $fileName;
        }
        $user->role = $request->role;
        $user->save();
        return back()->with('status', 'Profile Update!');
    }
}
