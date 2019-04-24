<?php

namespace App\Http\Controllers;

use App\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use Hash;

class NoteMaskController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function test()
    {
        return view('test');
    }

    public function ready(Request $request)
    {
        return view('ready');
    }

    public function error(Request $request)
    {
        return view('error');
    }

    public function create(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        $note = Note::add($request->all());
        Session::flash('note_url', $note->url);

        $diffInHours = $note->destroy->diffInMinutes(Carbon::now());
        if ($diffInHours > 0) {
            Session::flash('timer', 'yes');
        }
        Session::flash('destroy', $note->destroy);
        return redirect()->route('main');
    }

    public function password(Request $request)
    {
        $request->validate([
            'psw' => 'required',
            'url' => 'required',
        ]);

        if (Hash::check($request['psw'], Note::getNotePassword($request['url']))) {
            $text = Session::get('text');
            Session::remove('text');

            $note = Note::getNoteWithPasswordOrError($request['url']);
            $diffInSeconds = $note->destroy->diffInSeconds(Carbon::now(), false);

            $timer = 'no';
            if ($diffInSeconds < 0) {
                $timer = 'yes';
            }

            $destroy = $note->destroy;

            return view('password_text', compact('text', 'timer', 'destroy'));
        }
        return 'error';
    }

    public function confirm(Request $request)
    {
        Session::remove('text');
        if (!$note = Note::getNoteOrError($request['id'])) {
            $note_id = $request['id'];
            return view('notfound', compact('note_id'));
        }

        $text = $note->text;
        $ask_for_confirm = $note->ask_for_confirm;
        $url = $note->url;
        $password = false;
        $confirmed = true;
        $destroy = $note->destroy;

        $timer = 'no';
        $diffInSeconds = $note->destroy->diffInSeconds(Carbon::now(), false);
        if ($diffInSeconds < 0) {
            $timer = 'yes';
        }

        if ($note->password !== null) {
            $password = true;
            Session::put('text', $note->text);
        }

        $this->activeDisable($note);

        return view('note', compact('text', 'ask_for_confirm', 'url', 'confirmed', 'password', 'destroy', 'timer'));
    }


    public function note(Request $request)
    {
        Session::remove('text');
        if (!$note = Note::getNoteOrError($request['id'])) {
            $note_id = $request['id'];
            return view('notfound', compact('note_id'));
        }

        $ask_for_confirm = $note->ask_for_confirm;
        $text = $note->text;
        $url = $note->url;
        $password = false;
        $destroy = $note->destroy;

        $timer = 'no';
        $diffInSeconds = $note->destroy->diffInSeconds(Carbon::now(), false);
        if ($diffInSeconds < 0) {
            $timer = 'yes';
        }

        if ($note->password !== null) {
            $password = true;
            Session::put('text', $note->text);
        }

        if (!$ask_for_confirm) {
            $this->activeDisable($note);
        }

        return view('note', compact('text', 'ask_for_confirm', 'url', 'password', 'destroy', 'timer'));
    }

    private function activeDisable($note)
    {
        $diffInSeconds = $note->destroy->diffInSeconds(Carbon::now(), false);
        if ($diffInSeconds < 0) {

        } else {
            $note->active = false;
            $note->save();
        }
    }
}
