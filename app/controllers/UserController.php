<?php 

class UserController extends BaseController {

     public function signup()
    {

        if(Request::isMethod('POST'))
        {
            $username = Input::get('username');
            $password = Hash::make(Input::get('password'));

            $validator = Validator::make(

                array(
                    'username' => $username,
                    'password' => $password,
                    ),
                array(
                    'username' => 'required',
                    'password' => 'required',
                    'updated_at' => null,
                    'created_at' => null
                    )
                );

            $user = new User;

            $user->username = $username;
            $user->password = $password;

            $user->save();

            return Redirect::to('/signin')->with('message', 'Personnage enregistré, connexion ?');
        }
        return View::make('user.signup');
    }


    public function signin()
    {
        if(Request::isMethod('POST'))
        {
            if(Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
            {
                return Redirect::to('/compte')->with('message', 'Connexion reussi');
            } 
            else 
            {
                return Redirect::action('HomeController@index')->with('message', 'Nom du compte ou mot de passe invalide');

            }
        }

        return View::make('user.signin');
    }

    public function logout()
 {
      Auth::logout();
      return Redirect::to('/');
 }


    public function compte()
    {
        return View::make('user.compte');
    }


}

?>