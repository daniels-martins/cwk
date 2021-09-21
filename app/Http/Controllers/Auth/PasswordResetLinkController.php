<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $request->only('email'),
            fn ($user, $token) =>
                (DB::table('password_resets')
                    ->updateOrInsert(
                        ['email' => $user->email],
                        [ // the raw token sent to the user's email as seen in the url
                            'raw_url_token' => $token,
                            // the token that will be saved in the db for validation
                            'token' => Hash::make($token)
                        ]
                    ))  
                    ? $user->sendPasswordResetNotification($token) 
                    : null
        );

        return ($status == Password::RESET_LINK_SENT)

            ? back()->with('status', __($status))
            ->with('emailed', $request->email)
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
    }
}
