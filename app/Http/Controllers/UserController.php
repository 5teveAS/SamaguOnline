<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\MailSender;
use App\Mail\MyTestMail;
use App\Models\Employee;
use App\Models\Project;
use App\Models\User;
use App\Notifications\ContactFormNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    //
    public function datatable()
    {
        $users = User::all();
        $employees = Employee::all();
        return view('table-datatable-samaguUsers', ['users'=>$users, 'employees'=>$employees]);

    }


    public function create(){

        $employees = Employee::all();
        return view('register-samaguUser', ['employees'=>$employees]);
    }
    public function store(){
        //        dd(request()->all());

        $inputs = request()->validate([
            'employee_id'=>'required|unique:users,employee_id',
            'image'=>'image|mimes:jpeg,jpg,png,gif|max:3000',
            'user_name'=>'required|unique:users,user_name',
            'email'=>'required|email|unique:users,email',
            'role'=>'required',
            'password'=> ['required','max:50',
                Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),],
        ]);
        $user = new User();
        if(request('image')){
            $inputs['image'] = request('image')->store('images/user/'.'employee_id('.$inputs['employee_id'].')');
            $user->image = $inputs['image'];
        }
        $user->employee_id = $inputs['employee_id'];
        $user->user_name = $inputs['user_name'];
        $user->email = $inputs['email'];
        $user->role = $inputs['role'];
        $user->password = bcrypt($inputs['password']);

        Notification::route('mail', $inputs['email'])->notify(new ContactFormNotification($inputs));

        $user->save();

        session()->flash('user-created-message', 'Usuario(a): ' . $user['user_name'] . ' fue agregado(a) con exito.');
        return redirect()->route('user.datatable');

    }
    public function changePassword(User $user){

        return view('auth/passwords/change-password', ['user'=>$user]);

    }
    public function updatePassword(User $user){

        $inputs = request()->validate([
            'old_password'=>'min:8|required',
            'password'=>['confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),],
        ]);
        $current_user = auth()->user();

        if(Hash::check($inputs['old_password'], $current_user->password)){
            $user->password=bcrypt($inputs['password']);
            $user->save();

        } else {
            session()->flash('incorrect-old-password', "La contraseña ingresada no coincide con la contraseña actual");
            return redirect()->back();

        }

        session()->flash('user-updated-message', '¡Contraseña modificada con éxito!');

        return redirect()->route('auth.profile');

    }


    public function edit(User $user)
    {

        $employees = Employee::all();
        return view('modify-samaguUser', ['user'=>$user, 'employees'=>$employees]);

    }

    public function destroy(User $user){


        session()->flash('message', 'Usuario(a): ' . $user['name'] . ' fue eliminado(a) con exito.');
        $user->delete();
        $url = $user->image;
        $url2 =  str_replace('http://127.0.0.1:8000/storage/', '', $url);
        Storage::delete($url2);
        File::deleteDirectory(public_path( 'storage/images/user/employee_id('.$user['employee_id'].')'));

        return back();//helper function para return to that page
    }

    public function update(User $user){

        $inputs = request()->validate([
            'employee_id'=>['required', Rule::unique('users')->ignore($user->employee_id, 'employee_id')],
            'image'=>'image|mimes:jpeg,jpg,png,gif|max:3000',
            'user_name'=>['required', Rule::unique('users')->ignore($user->employee_id, 'employee_id')],
            'email'=>['required','email', Rule::unique('users')->ignore($user->employee_id, 'employee_id')],
            'role'=>'required',
//            'password'=>'required|min:8'
        ]);
        if(request('image')){
            $url = $user->image;
            $url2 =  str_replace('http://127.0.0.1:8000/storage/', '', $url);
            Storage::delete($url2);
            $inputs['image'] = request('image')->store('images/user/'.'employee_id('.$inputs['employee_id'].')');
            $user->image = $inputs['image'];
        }

        $user->employee_id = $inputs['employee_id'];
        $user->user_name = $inputs['user_name'];
        $user->email = $inputs['email'];
        $user->role = $inputs['role'];
        $user->save();

        session()->flash('user-updated-message', 'Usuario(a): ' . $inputs['user_name'] . ' fue modificado(a) con exito.');

        return redirect()->route('user.datatable');
    }

}
