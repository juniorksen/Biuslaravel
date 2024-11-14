<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        return view('index');
    }


    public function dashboard()
    {
        return view('dashboard');
    }



    
    public function messages()
    {
        return view('messages');
    }

    
    public function Wifite2()
    {
        return view('Wifite2');
    }

    public function qr()
    {
        return view('qr');
    }

    public function gemelos()
    {
        return view('gemelos');
    }


    
    public function DSNIFF()
    {
        return view('DSNIFF');
    }


    public function torrent()
    {
        return view('torrent');
    }

    

    public function wifi()
    {
        return view('wifi');
    }

    public function Piracy()
    {
        return view('Piracy');
    }


    public function Bomb()
    {
        return view('Bomb');
    }


    


    
    

    
    


    

    


    





    // Este es el método que muestra la vista de bienvenida con los datos del usuario autenticado
    public function welcome()
    {
        // Aseguramos que el usuario esté autenticado
        $user = auth()->user();

        // Si el usuario no está autenticado, redirigimos a la página de inicio de sesión
        if (!$user) {
            return redirect()->route('index')->with('error', 'Por favor inicia sesión');
        }

        // Retornamos la vista con el usuario
        return view('welcome', compact('user'));
    }
    
    
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
            'url_perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url_fotos' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Crear el usuario
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
    
        // Subir la imagen de perfil
        if ($request->hasFile('url_perfil')) {
            $fileName = time() . '_' . uniqid() . '.' . $request->url_perfil->extension();
            $request->url_perfil->move(public_path('images/profiles'), $fileName);
            $user->url_perfil = 'images/profiles/' . $fileName;
        }
    
        // Subir las imágenes de fotos
        if ($request->hasFile('url_fotos')) {
            $fileName = time() . '_' . uniqid() . '.' . $request->url_fotos->extension();
            $request->url_fotos->move(public_path('images/photos'), $fileName);
            $user->url_fotos = 'images/photos/' . $fileName;
        }
    
        // Guardar el usuario
        $user->save();
    
        // Autenticar al usuario después del registro
        Auth::login($user);
    
        // Redirigir a la página de bienvenida
        return redirect()->route('welcome');
    }


//validar datos

        public function login()
        {
            return view('login');
        }

        // Procesar el inicio de sesión
        public function loginform(Request $request)
        {
            // Validar los datos del formulario
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string|min:8',
            ]);

            // Intentar autenticar al usuario
            if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']], $request->remember)) {
                // Si la autenticación fue exitosa, redirigir al usuario
                return redirect()->intended(route('welcome'));
            }

            // Si la autenticación falla, redirigir con un error
            return back()->withErrors(['email' => 'Las credenciales son incorrectas.'])->withInput($request->only('email'));
        }

        // Cerrar sesión
        public function logout()
        {
            Auth::logout();
            return redirect()->route('login');
        }


    }
