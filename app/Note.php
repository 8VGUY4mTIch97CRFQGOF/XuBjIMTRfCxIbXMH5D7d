<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Hash;


class Note extends Model
{
    const _YES_ = true;
    const _NO_ = false;

    protected $table = 'notes';
    protected $dates = ['destroy'];
    protected $fillable = [
        'text',
        'url',
        'password',
        'ask_for_confirm',
        'notification_email',
        'reference_name',
        'destroy',
    ];

    public static function add($request)
    {
        $ask_for_confirm = true;
        if (isset($request['dont_ask_confirm'])) {
            $ask_for_confirm = false;
        }

        $password = null;
        if (isset($request['password'])) {
            $password = Hash::make($request['password']);
        }

        $notification_email = null;
        if (isset($request['email'])) {
            $notification_email = $request['email'];
        }

        $reference_name = null;
        if (isset($request['name'])) {
            $reference_name = $request['name'];
        }

        $destroy_time = Carbon::now();
        switch ($request['self-desctucts']) {
            case '1':
                $destroy_time = Carbon::now()->addHours(1);
                $ask_for_confirm = false;
                break;
            case '24':
                $destroy_time = Carbon::now()->addHours(24);
                $ask_for_confirm = false;
                break;
            case '168':
                $destroy_time = Carbon::now()->addHours(168);
                $ask_for_confirm = false;
                break;
            case '720':
                $destroy_time = Carbon::now()->addHours(720);
                $ask_for_confirm = false;
                break;
        }

        return static::create([
            'text' => $request['text'],
            'ask_for_confirm' => $ask_for_confirm,
            'notification_email' => $notification_email,
            'reference_name' => $reference_name,
            'password' => $password,
            'url' => self::getUniqueUrl(),
            'destroy' => $destroy_time,
        ]);
    }

    public static function getNoteOrError($id)
    {
        if (!$note = self::where('url', $id)->where('active', self::_YES_)->first()) {
            return false;
        }
        return $note;
    }

    public static function getNoteWithPasswordOrError($id)
    {
        if (!$note = self::where('url', $id)->first()) {
            return false;
        }
        return $note;
    }

    public static function getNotePassword($id)
    {
        if (!$note = self::where('url', $id)->first()) {
            return false;
        }
        return $note->password;
    }

    private static function getUniqueUrl()
    {
        do {
            $url = strtolower(Str::random(8));
            $user_code = self::where('url', $url)->first();
        }
        while(!empty($user_code));

        return $url;
    }

}
