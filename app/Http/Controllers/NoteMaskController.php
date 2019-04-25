<?php

namespace App\Http\Controllers;

use App\Mail\Notification;
use App\Mail\NotificationWithName;
use App\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use Hash;
use Mail;
use Exception;

class NoteMaskController extends Controller
{
    public function lng($locale='en')
    {
        if (!in_array($locale, ['en', 'ru', 'lv'])){
            $locale = 'en';
        }
        Session::put('locale', $locale);
        return redirect()->route('main');
    }

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

    public function destroy(Request $request)
    {
        $request->validate([
            'd' => 'required',
            'url' => 'required',
        ]);
        Note::destroy($request->all());
        return redirect()->route('main');
    }

    public function create(Request $request)
    {
        $request->validate([
            'text' => 'required',
        ]);

        $note = Note::add($request->all());
        Session::flash('note_url', $note->url);
        Session::flash('note_id', $note->id);

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
            $id = $note->id;
            $url = $note->url;

            return view('password_text', compact('text', 'timer', 'destroy', 'id', 'url'));
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
        $id = $note->id;

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

        return view('note', compact('text', 'ask_for_confirm', 'url', 'confirmed', 'password', 'destroy', 'timer', 'id'));
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
        $id = $note->id;

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

        return view('note', compact('text', 'ask_for_confirm', 'url', 'password', 'destroy', 'timer', 'id'));
    }

    private function activeDisable($note)
    {
        $diffInSeconds = $note->destroy->diffInSeconds(Carbon::now(), false);
        if ($diffInSeconds < 0) {

        } else {
            $note->active = false;
            $note->text = '';
            $note->save();

            try {
                if ($note->notification_email !== null) {
                    if ($note->reference_name !== null) {
                        Mail::to($note->notification_email)->send(new NotificationWithName($note->reference_name));
                    } else {
                        Mail::to($note->notification_email)->send(new Notification());
                    }
                }
            } catch (Exception $e) {

            }

        }
    }
}
